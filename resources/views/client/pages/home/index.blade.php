@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection
@section('page')
    <section id="slideshow-container">
        <!-- Slideshow wrapper begin -->
        <div data-uk-slideshow="autoplay: true; animation: slide; max-height: 500">
            <div class="uk-position-relative">
                <ul class="uk-slideshow-items">
                    <!-- Slide 1 begin -->
                    <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center">
                            <img src="/client/images/slideshow/bg_slide1.jpg" alt="" uk-cover>
                        </div>
                        <div class="uk-container uk-position-center">
                            <div class="uk-grid">
                                <div class="uk-width-3-4@l uk-width-1-1@s uk-margin-medium-left">
                                    <h1 class="uk-margin-small-bottom">@lang('client.home_slider_slide1_text_1')</h1>
                                    <h3 class="uk-margin-small-top uk-margin-medium-bottom idz-thin uk-visible@m">@lang('client.home_slider_slide1_text_2')</h3> <a class="uk-button uk-button-primary" href="/{{ request()->segment(1) }}/education">@lang('client.home_slider_slide1_button_learn_more')</a> <a class="uk-button uk-button-secondary uk-margin-small-left uk-visible@m" href="https://client.finacapital.net/en-US/Account/Register">@lang('client.home_slider_slide1_button_create_account')</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Slide 1 end -->
                    <!-- Slide 2 begin -->
                    <!-- <li>
                                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center">
                                    <img src="images/slideshow/bg_slide2.jpg" alt="" uk-cover>
                                </div>
                                <div class="uk-container uk-position-center">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1 uk-align-center uk-text-center">
                                            <h1 class="uk-margin-small-bottom">Don't wait. Open an account today.</h1>
                                            <h3 class="uk-margin-small-top uk-margin-bottom idz-thin uk-visible@m">Get up to $600 plus 60 days of commission-free stocks and options trades</h3>
                                            <form class="uk-grid-small" data-uk-grid>
                                                <div class="uk-width-1-4@s uk-visible@m">
                                                    <input class="uk-input" type="text" placeholder="Full name"> </div>
                                                <div class="uk-width-1-4@s uk-visible@m">
                                                    <input class="uk-input" type="text" placeholder="Email address"> </div>
                                                <div class="uk-width-1-4@s uk-visible@m">
                                                    <input class="uk-input" type="text" placeholder="Phone number"> </div>
                                                <div class="uk-width-1-4@s">
                                                    <button class="uk-button uk-width-1-1 uk-button-secondary">Create Account</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                    <!-- Slide 2 end -->
                    <!-- Slide 3 begin -->
                    <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center">
                            <img src="/client/images/slideshow/bg_slide3.jpg" alt="" uk-cover>
                        </div>
                        <div class="uk-container uk-position-center">
                            <div class="uk-grid">
                                <div class="uk-width-3-4@l uk-width-1-1@s uk-margin-medium-left">
                                    <h1 class="uk-margin-small-bottom">@lang('client.home_slider_slide2_text_1')</h1>
                                    <h3 class="idz-thin uk-margin-small-top uk-margin-bottom uk-visible@m">@lang('client.home_slider_slide2_text_2')</h3>
                                    <div class="uk-label uk-label-success">@lang('client.home_slider_slide2_label_text')</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Slide 3 end -->
                </ul>
            </div>
            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
        <!-- Slideshow wrapper end -->
    </section>
    <section class="uk-margin-medium-bottom">
        <!-- Stock ticker begin -->
        <div class="uk-container uk-container-expand uk-padding-remove idz-stock-ticker-container" data-uk-slider="autoplay: true">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                        "symbols": [
                        {
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "Nasdaq 100"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR/USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "BTC/USD"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "ETH/USD"
                        }
                    ],
                        "showSymbolLogo": true,
                        "colorTheme": "dark",
                        "isTransparent": true,
                        "displayMode": "simple",
                        "locale": "en"
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <!-- Stock ticker end -->
    </section>
    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-default">
            <div class="uk-container uk-margin-large-top uk-margin-large-bottom">
                <div class="uk-grid">
                    <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                        <img class="uk-align-center uk-align-left@l uk-margin-small-top" src="/client/images/content/content_sample6.png" alt="">
                    </div>
                    <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                        <h2 class="uk-margin-remove-bottom">@lang('client.home_section1_header')</h2>
                        <p>@lang('client.home_section1_text')</p>
                        <ul class="uk-list uk-margin-bottom idz-platform-icon">
                            <li><i class="fa fa-3x fa-globe"></i>@lang('client.home_section1_icon_globe_text')</li>
                            <li><i class="fa fa-3x fa-building"></i>@lang('client.home_section1_icon_building_text')</li>
                            <li><i class="fa fa-3x fa-trophy"></i>@lang('client.home_section1_icon_trophy_text')</li>
                            <li><i class="fa fa-3x fa-gavel"></i>@lang('client.home_section1_icon_gavel_text')</li>
                        </ul> <a class="uk-button uk-button-default uk-width-1-1 uk-margin-top uk-margin-bottom" href="https://client.finacapital.net/en-US/Account/Register">@lang('client.home_section1_button_open_account')</a> </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h2 class="uk-text-center">@lang('client.home_section2_header')</h2>
                        <div class="uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-1@s" data-uk-grid>
                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="/client/images/content/content_icon1.png" alt="">
                                <h6 class="uk-text-uppercase uk-text-muted uk-margin-remove-top uk-margin-small-bottom">@lang('client.home_section2_section1_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section2_section_1_text')</p>
                            </div>
                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="/client/images/content/content_icon2.png" alt="">
                                <h6 class="uk-text-uppercase uk-text-muted uk-margin-remove-top uk-margin-small-bottom">@lang('client.home_section2_section2_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section2_section2_text')</p>
                            </div>
                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="/client/images/content/content_icon3.png" alt="">
                                <h6 class="uk-text-uppercase uk-text-muted uk-margin-remove-top uk-margin-small-bottom">@lang('client.home_section2_section3_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section2_section3_text')</p>
                            </div>
                            <div class="uk-text-center"> <img class="uk-margin-bottom" src="/client/images/content/content_icon4.png" alt="">
                                <h6 class="uk-text-uppercase uk-text-muted uk-margin-remove-top uk-margin-small-bottom">@lang('client.home_section2_section4_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section2_section4_text')</p>
                            </div>
                        </div>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                        <div class="uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s idz-award-container" data-uk-grid>
                            <div class="uk-margin-remove-bottom">
                                <div class="uk-panel idz-award-logo">
                                    <h5 class="uk-text-uppercase uk-text-right uk-float-left">@lang('client.home_section2_rating1_text')<br/><span class="idz-thin">@lang('client.home_section2_rating1_year')</span></h5>
                                    <ul class="uk-list idz-award-rating uk-float-left">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul> <!-- <img src="/images/content/award_logo1.png" alt=""> --> </div>
                            </div>
                            <div class="uk-margin-remove-bottom">
                                <div class="uk-panel idz-award-logo">
                                    <h5 class="uk-text-uppercase uk-text-right uk-float-left">@lang('client.home_section2_rating2_text')<br/><span class="idz-thin">@lang('client.home_section2_rating2_year')</span></h5>
                                    <ul class="uk-list idz-award-rating uk-float-left">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul> <!-- <img src="/images/content/award_logo2.png" alt=""> --> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom idz-invest-product">
        <div class="uk-container">
            <div class="uk-grid uk-margin-small-top">
                <div class="uk-width-3-5@l uk-width-1-1@m uk-width-1-1@s">
                    <h2 class="uk-margin-remove-bottom">@lang('client.home_section3_header')</h2>
                    <h3 class="uk-margin-remove-top idz-thin">@lang('client.home_section3_subheader')</h3>
                    <p class="uk-text-lead">@lang('client.home_section3_text')</p>
                    <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid-match uk-margin-medium-top" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card green">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square1_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square1_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card blue">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square2_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square2_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card purple">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square3_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square3_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card midnight">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square4_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square4_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card grey">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square5_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square5_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card orange">
                                <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.home_section3_square6_header')</h6>
                                <p class="uk-margin-remove-top">@lang('client.home_section3_square6_text')</p>
                                <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="uk-container uk-container-expand uk-background-primary uk-light">
            <div class="uk-container uk-margin-large-top uk-margin-medium-bottom">
                <div class="uk-grid">
                    <div class="uk-width-4-5@l uk-width-1-1@s uk-align-center">
                        <div class="idz-icon-circle large white uk-float-left uk-margin-top uk-margin-medium-right idz-content-adjust3"> <i class="fa fa-5x fa-percent"></i> </div>
                        <h2 class="uk-margin-small-bottom uk-margin-remove-top uk-text-center">@lang('client.home_section4_header')</h2>
                        <p class="uk-margin-remove-top uk-text-lead uk-text-center">@lang('client.home_section4_text') <span class="uk-text-bold">@lang('client.home_section4_text_bold')</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-medium-bottom">
        <div class="uk-container uk-container-expand uk-background-fixed uk-background-cover uk-background-center-center" style="background-image: url(/client/images/content/content_background2.jpg);">
            <div class="uk-container uk-margin-medium-top">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h2 class="uk-text-center uk-margin-medium-bottom">@lang('client.home_section5_header')</h2>
                        <div class="uk-child-width-1-2" data-uk-grid>
                            <div class="uk-width-1-3@l uk-width-2-5@m">
                                <ul class="uk-list uk-margin-medium-bottom idz-platform-icon">
                                    <li><i class="fa fa-3x fa-windows"></i><a href="#" target="_blank"> Windows</li></a>
                                    <li><i class="fa fa-3x fa-apple"></i><a href="https://apps.apple.com/us/app/metatrader-5/id413251709" target="_blank">OS X &amp; iOS</li></a>
                                    <li><i class="fa fa-3x fa-android"></i><a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader5&hl=ka&gl=US" target="_blank">Android</li></a>
                                    <li><i class="fa fa-3x fa-internet-explorer"><a href="https://webtrader.finacapital.net/" target="_blank"></i>Browser</li></a>
                                </ul>
                                <div class="uk-card uk-card-default uk-card-medium uk-card-body idz-card-custom">
                                    <h6 class="uk-text-uppercase uk-text-success">@lang('client.home_section5_subheader')</h6>
                                    <p class="uk-text-lead">@lang('client.home_section5_p1')</p>
                                    <p>@lang('client.home_section5_p2')</p>
                                    <div class="uk-text-center uk-margin-small-bottom"> <a class="uk-button uk-button-primary" href="/client/includes/platform.exe" target="_blank">@lang('client.home_section5_download_button')</a> </div>
                                </div>
                            </div>
                            <div class="uk-width-2-3@l uk-width-3-5@m uk-inline"> <img class="uk-align-center uk-position-bottom idz-media-adjust1" src="/client/images/content/content_sample1.png" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h2 class="uk-text-center uk-margin-medium-bottom">@lang('client.home_section6_header')</h2>
                    <div class="uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-medium uk-grid-match" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body idz-resources-card">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-book"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-text-muted uk-margin-small-bottom">@lang('client.home_section6_square1_header')</h6>
                                        <p class="uk-margin-remove-top">@lang('client.home_section6_square1_text')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body idz-resources-card">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-gears"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-text-muted uk-margin-small-bottom">@lang('client.home_section6_square2_header')</h6>
                                        <p class="uk-margin-remove-top">@lang('client.home_section6_square2_text')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body idz-resources-card">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-area-chart"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-text-muted uk-margin-small-bottom">@lang('client.home_section6_square3_header')</h6>
                                        <p class="uk-margin-remove-top">@lang('client.home_section6_square3_text')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body idz-resources-card">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-calculator"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-text-muted uk-margin-small-bottom">@lang('client.home_section6_square4_header')</h6>
                                        <p class="uk-margin-remove-top">@lang('client.home_section6_square4_text')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body idz-resources-card">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-support"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-text-muted uk-margin-small-bottom">@lang('client.home_section6_square5_header')</h6>
                                        <p class="uk-margin-remove-top">@lang('client.home_section6_square5_text')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <!-- <div class="uk-card uk-card-primary uk-card-small uk-card-body idz-resources-card red">
                                <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                    <div class="uk-width-auto"> <i class="fa fa-3x fa-youtube-play"></i> </div>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-text-uppercase uk-margin-small-bottom">Video Tutorial</h6>
                                        <p class="uk-margin-remove-top">Various trading principle and study case video tutorials from our professional trainers and practitioners.</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="uk-container uk-container-expand idz-create-account">
            <div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
                <div class="uk-width-1-1">
                    <h2 class="uk-margin-small-bottom">@lang('client.home_section7_header')</h2>
                    <p class="uk-text-lead uk-margin-remove-top uk-visible@m">@lang('client.home_section7_text')</p>
                    <form class="uk-grid-small uk-margin-bottom" data-uk-grid>
                        <div class="uk-width-1-5@l uk-width-1-4@s">
                            <input class="uk-input" type="text" placeholder="@lang('client.home_section7_placeholder_name')"> </div>
                        <div class="uk-width-1-5@l uk-width-1-4@s">
                            <input class="uk-input" type="text" placeholder="@lang('client.home_section7_placeholder_email')"> </div>
                        <div class="uk-width-1-5@l uk-width-1-4@s">
                            <input class="uk-input" type="text" placeholder="@lang('client.home_section7_placeholder_phone')"> </div>
                        <div class="uk-width-1-5@l uk-width-1-4@s">
                            <button class="uk-button uk-button-primary">@lang('client.home_section7_button_create_account')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
