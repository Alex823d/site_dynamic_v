<!DOCTYPE html>
<html lang="{{ request()->segment(1) }}" dir="ltr">

<head>
    <!-- Standard Meta -->
    <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Properties -->
    @yield('subhead')
    <link rel="shortcut icon" href="/client/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/client/images/apple-touch-icon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/client/css/uikit.min.css">
    <link rel="stylesheet" href="/client/css/style.css">
    <link rel="stylesheet" href="/client/css/components/swiper.css">
    <link rel="stylesheet" href="/client/css/components/font-awesome.css"> </head>

<body>
<!-- header begin -->
@include('client.layout.includes.header.header')
<!-- header end -->
@yield('page')
<!-- header begin -->
@include('client.layout.includes.footer.footer')
<!-- header end -->
<!-- Javascript -->
<script src="/client/js/jquery.js"></script>
<script src="/client/js/uikit.min.js"></script>
<script src="/client/js/uikit-icons.min.js"></script>
<script src="/client/js/components/mediaelement.js"></script>
<script src="/client/js/config.js"></script>
<script type="text/javascript">
    function sendEmail() {
        event.preventDefault();
        closeNotification();
        let full_name = $('input[name ="full_name"]').val();
        let email = $('input[name ="email"]').val();
        let subject = $('input[name ="subject"]').val();
        let message = $('textarea[name ="message"]').val();
        $('#buttonsend').hide()
        $('#loading').css('display','block')
        $.ajax({
            url: 'https://fina.so/contact.php',
            method: 'POST',
            dataType: 'json',
            data: {
                full_name: full_name,
                subject: subject,
                email: email,
                message: message
            }, success: function (res) {
                if (res.status === 'success') {
                    $('#contact-form')[0].reset();
                    $('#loading').css('display','none')
                    $('#buttonsend').show()
                    let content = `<li><span>Message sent!</span></li>`
                    showNotification(content, res.status);
                    setTimeout(function () {
                        closeNotification()
                    }, 4000);
                } else {
                    $('#loading').css('display','none')
                    $('#buttonsend').show()
                    let content = `<li><span>Message not sent!</span></li>`
                    showNotification(content, res.status);
                }
            }
        })
    }

    function closeNotification() {
        $('.notification-container').html('')
    }

    function showNotification(content, status) {
        let fullContent = '';
        if (status === 'warning') {
            fullContent = `<div class="notification-warning" style="color: red">
                        ${content}
                    </div>`;
        } else if (status === 'success') {
            fullContent = `<div class="notification-success" style="color: green">
                        ${content}
                    </div>`;
        }
        $('.notification-container').html(fullContent)
    }
</script>
</body>

</html>
