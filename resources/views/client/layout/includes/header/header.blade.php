<header>
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-4@s">
                    <!-- logo header begin -->
                    <div id="header-logo">
                        <a class="uk-logo" href="/{{ request()->segment(1) }}"><img src="/client/images/logo.png" alt="fina finance" /></a>
                    </div>
                    <!-- logo header end -->
                </div>
                <div class="uk-width-3-5@l uk-width-2-3@m uk-width-3-4@s uk-visible@m">
                    <div class="uk-grid">
                        <div class="uk-width-1-2">
                            <div class="idz-mini-nav uk-align-right new-absolute">
                                <form class="uk-display-inline">
                                    <div data-uk-form-custom="target: > * > span:last-child">
                                        <div class="language-drop">
                                            <div class="selected">
                                            @php

                                            $_langs = $langs;

                                            $selected = Arr::pull($langs,app()->getLocale());

                                            @endphp



                                                <img src="/client/images/langs/globe.svg">
                                                <p>{{ $selected['title'] }}</p>

                                            </div>
                                            <div class="drops">
                                                @foreach($langs as $i => $lang)


                                                <a href="/{{$lang['locale']}}">
                                                    <div class="p">{{$lang['title']}}</div>
                                                </a>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </form> <a class="uk-button uk-display-inline" href="https://client.finacapital.net/en-US/Account/Login"><i class="fa fa-sign-in"></i>&nbsp; @lang('client.header_login')</a>
                                <a class="uk-button uk-display-inline" href="https://webtrader.finacapital.net/"><i class="fa fa-internet-explorer"></i>&nbsp; @lang('client.header_web_platform')</a>
                            </div>
                        </div>
                        <!-- <div class="uk-width-1-2 phone-number">
                            <h2 class="uk-align-right">1-800-123-4567</h2>
                        </div> -->
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <hr>
                    <!-- Main navigation begin -->
                    <nav class="uk-navbar-container uk-visible@m" data-uk-navbar style="z-index: 980;" data-uk-sticky="animation: uk-animation-slide-top; cls-active: uk-sticky; cls-inactive: uk-navbar-container; bottom: #offset">
                        <div class="uk-navbar-left">
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"> <a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a>
                                </li>
                                <li><a href="/{{ request()->segment(1) }}/investment">@lang('client.header_menu_investment')</a></li>
                                <li><a href="/{{ request()->segment(1) }}/education">@lang('client.header_menu_education')</a></li>
                                <li> <a href="">@lang('client.header_menu_company')</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">@lang('client.header_menu_dropdown_header')</li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/about-us">@lang('client.header_menu_company_about_us')</a></li>
                                                    <!-- <li><a href="/en/company/legal-docs">Legal Documents</a></li> -->
                                                    <li><a href="/{{ request()->segment(1) }}/company/testimonials">@lang('client.header_menu_company_testimonials')</a></li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/legal-docs">@lang('client.header_menu_company_legal_docs')</a></li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/faq">@lang('client.header_menu_company_faq')</a></li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.header_menu_company_contact_us')</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">@lang('client.header_menu_dropdown_platforms')</li>
                                                    <li><i class="fa fa-android"></i><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=ka&gl=US" target="_blank">Android</a></li>
                                                    <li><i class="fa fa-apple"></i><a href="https://apps.apple.com/us/app/metatrader-5/id413251709" target="_blank">IOS</a></li>
                                                    <li><i class="fa fa-internet-explorer"></i><a href="https://webtrader.finacapital.net/" target="_blank">Web Platform</a></li>
                                                    <li><i class="fa fa-windows"></i><a href="/client/includes/platform.exe" target="_blank">Windows</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right uk-visible@l">
                            <div data-uk-margin> <a class="uk-button uk-button-primary" href="https://client.finacapital.net/en-US/Account/Register">@lang('client.header_create_account')</a> </div>
                        </div>
                    </nav>
                    <!-- Main navigation end -->
                    <!-- Mobile navigation begin -->
                    <a class="uk-button uk-align-center idz-mobile-nav uk-hidden@m" href="#modal-full" data-uk-icon="icon: menu" data-uk-toggle>@lang('client.header_mobile_menu')</a>
                    <div id="modal-full" class="uk-modal-full" data-uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
                            <div data-uk-height-viewport>
                                <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                    <ul class="uk-nav-primary uk-nav-parent-icon" data-uk-nav>
                                        <li class="uk-active"> <a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a>
                                </li>
                                        <li><a href="/{{ request()->segment(1) }}/investment">@lang('client.header_menu_investment')</a></li>
                                <li><a href="/{{ request()->segment(1) }}/education">@lang('client.header_menu_education')</a></li>
                                <li>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">@lang('client.header_menu_dropdown_header')</li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/about-us">@lang('client.header_menu_company_about_us')</a></li>
                                                    <!-- <li><a href="/en/company/legal-docs">Legal Documents</a></li> -->
                                                    <li><a href="/{{ request()->segment(1) }}/company/testimonials">@lang('client.header_menu_company_testimonials')</a></li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/faq">@lang('client.header_menu_company_faq')</a></li>
                                                    <li><a href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.header_menu_company_contact_us')</a></li>
                                                </ul>
                                        </li>
                                        <li><div data-uk-margin><a class="uk-button uk-button-primary" href="https://client.finacapital.net/en-US/Account/Register" target="_blank">@lang('client.header_create_account')</a></div></li>
                                        <li class="newOnes first"><a class="uk-button uk-display-inline " href="https://client.finacapital.net/en-US/Account/Login" target="_blank"><i class="fa fa-sign-in"></i>&nbsp; @lang('client.header_login')</a></li>
                                        <li class="newOnes"><a class="uk-button uk-display-inline " href="https://webtrader.finacapital.net/" target="_blank"><i class="fa fa-internet-explorer"></i>&nbsp; @lang('client.header_web_platform')</a></li>
                                        <li class="newOnes">
                                            <div class="langs">
                                                @foreach($_langs as $i => $lang)


                                                    <a class="lng" href="/{{$lang['locale']}}">{{$lang['title']}}</a>
                                                @endforeach


                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile navigation end -->
                </div>
            </div>
        </div>
    </header>
