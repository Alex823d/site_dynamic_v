@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.company_about_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_about_us_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <!-- Breadcrumb begin -->
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company_about_us')</a></li>
                    </ul>
                    <!-- Breadcrumb end -->
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-2-3@l uk-width-1-1@s uk-align-center uk-text-center">
                    <h2 class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.company_about_us_section1_header')</h2>
                    <p class="uk-text-lead uk-margin-small-bottom">@lang('client.company_about_us_section1_text')</p>
                </div>
                <div class="uk-width-1-1">
                    <div class="uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-1@s uk-margin-top" data-uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                <div class="uk-width-auto uk-margin-small-right"> <i class="fa fa-3x fa-leaf uk-margin-small-top"></i> </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-margin-remove-bottom idz-thin">@lang('client.company_about_us_section1_card1_header')</h3>
                                    <p class="uk-margin-small-top">@lang('client.company_about_us_section1_card1_text')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                <div class="uk-width-auto uk-margin-small-right"> <i class="fa fa-3x fa-hourglass-end uk-margin-small-top"></i> </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-margin-remove-bottom idz-thin">@lang('client.company_about_us_section1_card2_header')</h3>
                                    <p class="uk-margin-small-top">@lang('client.company_about_us_section1_card2_text')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-grid-small uk-flex-top" data-uk-grid>
                                <div class="uk-width-auto uk-margin-small-right"> <i class="fa fa-3x fa-flag uk-margin-small-top"></i> </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-margin-remove-bottom idz-thin">@lang('client.company_about_us_section1_card3_header')</h3>
                                    <p class="uk-margin-small-top">@lang('client.company_about_us_section1_card3_text')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-top">
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <div class="uk-card uk-card-medium uk-card-secondary uk-card-body uk-margin-bottom">
                        <h6 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_about_us_section2_card_header')</h6>
                        <p class="uk-margin-small-top">@lang('client.company_about_us_section2_card_text')</p> <a class="uk-button uk-button-primary" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.company_about_us_section2_card_contactus_button')</a> </div>
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <p class="uk-text-lead">@lang('client.company_about_us_section2_text')</p>
                    <ul class="uk-list idz-list-check">
                        <li>@lang('client.company_about_us_section2_check1')</li>
                        <li>@lang('client.company_about_us_section2_check2')</li>
                        <li>@lang('client.company_about_us_section2_check3')</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
