@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.company_faq_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_faq_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/company/faq">@lang('client.header_menu_company_faq')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-top uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
                    <ul data-uk-accordion="collapsible: false" class="uk-margin-medium-bottom">
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box1_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box1_text')</p>

                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box2_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box2_text')</p>

                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box3_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box3_text')</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box4_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box4_text')</p>

                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box5_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box5_text')</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box6_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box6_text')</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title">@lang('client.company_faq_box7_title')</h3>
                            <div class="uk-accordion-content">
                                <p>@lang('client.company_faq_box7_text')</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">

                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-primary uk-card-body">
                            <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_faq_card_title')</h5>
                            <p class="uk-margin-small-top">@lang('client.company_faq_card_text')</p> <a class="uk-button uk-button-primary" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.company_faq_card_contactus_button')</a> </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
