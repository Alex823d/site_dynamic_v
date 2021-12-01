function getRandParam() {
    return Math.floor(1000000 + Math.random() * 900000);
}

function sendRegistrationRequest(params, method = 'POST') {

    var url = 'https://my.platform.so/api/v_2/page/RegisterUser';
    var httpClient = new XMLHttpRequest();

    httpClient.open(method, url, true);
    params.append('login', params.get('email'));
    httpClient.onreadystatechange = function () {

        if (this.readyState !== 4) {
            return;
        }

        registrationResponse = JSON.parse(this.response);

        if (registrationResponse.result !== 'success' && !registrationResponse.hasOwnProperty('values')) {
            enableBtn();
            // generate Error message
            let errormsg = generateErrorMsg(registrationResponse.errors);
            showSignError(errormsg);
            return;
        }

        // Append user_email key for sign-in 
        params.append('user_email', params.get('email'));

        let paramsForLogin = prepareParams(params);

        // Log user in dashboard.     
        sendLoginRequest(paramsForLogin, false);
    };
    httpClient.send(params);
}

function generateErrorMsg(registrationErrors = {}) {
    let warningHtml = '';

    for (var regError in registrationErrors) {
        let msg = `${registrationErrors[regError]}`;

        if (msg === '[object Object]') {
            let newobject = registrationErrors[regError];
            Object.values(newobject).forEach(function (errmsg) {
                warningHtml += errmsg + '<br>';
            });
            continue;
        }

        warningHtml += msg + '<br>';
    }
    return warningHtml;
}

function prepareParams(formdataParams, requiredParams = ['key', 'rand_param', 'user_email', 'password']) {
    var fdforLogin = new FormData();

    var found = 0;
    for (var key of formdataParams.keys()) {
        let keypos = requiredParams.indexOf(key);
        if (keypos >= 0) {
            fdforLogin.append(key, formdataParams.get(key));
            continue;
        }
        found++;
    }
    return fdforLogin;
}

function sendLoginRequest(params, createTradeAccount = false) {
    var requiredParams = ['key', 'rand_param', 'user_email', 'password'];
    var lacksParam = false;

    requiredParams.forEach(function (val) {
        if (!params.get(val)) {
            lacksParam = true;
        }
    });

    if (lacksParam) {
        enableBtn();
        showSignError('Not enough parameters');
        return;
    }

    var url = 'https://my.platform.so/api/v_2/page/Login';

    var httpClient = new XMLHttpRequest();

    httpClient.open('POST', url, true);


    httpClient.onreadystatechange = function () {
        if (this.readyState !== 4) {
            return;
        }

        userInfo = JSON.parse(this.response);

        if (userInfo.result !== 'success' && !userInfo.hasOwnProperty('values')) {
            enableBtn();
            showSignError(userInfo.description);
            return;
        }
        creds = userInfo.values;

        let urlToRedirect = 'https://tradersroom.platform.so/preloading/' + creds.auth_token + '/' + params.get('user_email') + '/en/';

        if (createTradeAccount) {
            // Add additional Params
            let paramsForTradeAccount = getRequiredParamsForTradeAcc(params, creds);
            sendTradeAccountRegistrationRequest(paramsForTradeAccount);
        }

        window.location.replace(urlToRedirect);
    };

    httpClient.send(params);
}

function getRequiredParamsForTradeAcc(params, userdata) {
    params.append('group_id', 6);
    params.append('leverage', 100);
    params.append('auth_token', userdata.auth_token);
    params.append('user_id', userdata.user_id);
    params.append('is_active', 1);
    params.append('send_email', 0);
    params.delete('user_email');

    return params;
}

function sendTradeAccountRegistrationRequest(params) {
    var url = 'https://my.platform.so/api/v_2/trading/RegisterTradeAccount';

    httpClient = new XMLHttpRequest();

    httpClient.open('POST', url, true);

    httpClient.onreadystatechange = function () {
        if (this.readyState !== 4) {
            return;
        }

        let TradeAccRegistrationResponse = JSON.parse(this.response);

        if (TradeAccRegistrationResponse.result !== 'success' && !userInfo.hasOwnProperty('values')) {
            enableBtn();
            // generate Error message
            let errormsg = generateErrorMsg(TradeAccRegistrationResponse.errors);
            showSignError(errormsg);
            return;
        }
    };

    httpClient.send(params);

}

function getMandatoryParams(action = 'login') {

    var apiKey = 'X4bXbJk5kwXz';
    var randomParam = getRandParam();
    var key = MD5(apiKey + randomParam);

    var params = {
        key: key,
        rand_param: randomParam
    };

    if (action === 'register') {
        params.send_email = 0;
        params.is_active = 1;
    }

    return params;
}

function showSignError(warningText = "Error!", warningClassName = 'auth-form-warning') {
    var warningMesssage = document.getElementsByClassName(warningClassName)[0];
    warningMesssage.style.display = "block";
    warningMesssage.innerHTML = warningText;
    warningMesssage.classList.add('alert__box');
}

function hideSignError(warningClassName = 'auth-form-warning') {
    var warningMesssage = document.getElementsByClassName(warningClassName)[0];

    if (warningMesssage.style.display !== 'none') {
        warningMesssage.style.display = 'none';
}
}

function displayFormData(formdata) {
    for (var x of formdata) {
        console.log(x);
    }
}

function disableBtn() {
    var button = document.getElementsByClassName('auth-section__form-subbmit')[0];
    button.disabled = true;
    var iElem = document.createElement('i');
    iElem.className = 'fa fa-spinner fa-spin';
    button.appendChild(iElem);

    console.log(button);
}

function enableBtn() {
    var button = document.getElementsByClassName('auth-section__form-subbmit')[0];
    button.disabled = false;
    var loader = document.getElementsByClassName('fa fa-spinner fa-spin')[0];
    if (loader) {
        loader.remove();
    }

}

///
const getRequiredCRMParams = (fdObject, deskId) => {
    const CRMMandatoryParams = [
      'key','rand_param','email','first_name','second_name','country',
      'phone'
    ];
    
    const fdStack = new FormData();
    
    Array.from(fdObject).forEach((item) => {
        let paramKey = item[0];
        if (!CRMMandatoryParams.includes(paramKey)) {
            return;
        }
        fdStack.append(paramKey,item[1]);
    });
    
    fdStack.append('desk_id',deskId);
    fdStack.append('description','Fina Registration.');
    
    return fdStack;
};

const getLeadEndpoint = (fdObject,deskId) => {
    const crmParamObject = getRequiredCRMParams(fdObject,deskId);
    const params = new URLSearchParams(crmParamObject);
    let addLeadBaseUrl = "https://my.platform.so/api/v_2/crm/CreateLead";
    let endpoint = addLeadBaseUrl + '?' + params;
    
    return endpoint;
    
};
////




function applyForm(action = 'login') {
    event.preventDefault();
    hideSignError();
    disableBtn();

    var allowedActions = ['login', 'register'];

    if (!allowedActions.includes(action)) {
        return;
    }

    var formToApply = (action === 'login') ? document.getElementById('signin-form') : document.getElementById('signup-form');

    // check if terms of use is checked for registration
    if (action === 'register') {
        let termsOfUse = document.getElementById('age').checked;
        if (!termsOfUse) {
            enableBtn();
            showSignError('You should accept Terms of use');
            return;
        }
    }

    var formData = new FormData(formToApply);

    var additionalParams = getMandatoryParams(action);

    // Check if item empty
    for (var formItem of formData.values()) {
        if (!formItem) {
            enableBtn();
            showSignError('Fields should not be empty');
            return;
        }
    }

    for (var param in additionalParams) {
        formData.append(param, additionalParams[param]);
    }

      if (action === 'register') {
         const addLeadUrl = getLeadEndpoint(formData,123);
 //        console.log(addLeadUrl);
         fetch(addLeadUrl).then( (response) => {
             return response.json();
         }).then( (responseItem) => {
            // console.log(responseItem);
            sendRegistrationRequest(formData); 
         }).catch(err => {
                alert(err);
         });
       
        return;
    }


    // Send API request
    sendLoginRequest(formData);

}

document.getElementById('signup-phone-num').onkeyup = function (event) {
    let inputvalue = this.value;

    let numberPattern = /\d+/g;
    
    let numberList = inputvalue.match(numberPattern);
    
    if (!numberList) {
        this.value = '';
        return;
    }
    
     this.value = "+" + numberList.join('');
};