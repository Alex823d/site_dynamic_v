@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.company_contact_us_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_contact_us_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company_contact_us')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-1-1 uk-margin-medium-bottom">
                    <h2>@lang('client.company_contact_us_section1_header')</h2>
                    <p class="uk-text-lead">@lang('client.company_contact_us_section1_text_line_1')
                        <br/>@lang('client.company_contact_us_section1_text_line_2')</p>
                    <div class="uk-card uk-card-default uk-card-medium uk-margin-medium-top">
                        <div class="uk-card-body">
                            <div class="uk-child-width-1-3@m uk-grid-divider uk-grid-medium uk-grid-match" data-uk-grid>
                                <div>
                                    <h6 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_contact_us_section1_box_header')</h6>
                                    <p class="uk-margin-small-top">@lang('client.company_contact_us_section1_box_text')</p>
                                    <ul class="uk-list idz-list-contact uk-text-success uk-margin-remove-top">
                                        <li><span class="uk-label uk-label-success"><i class="fa fa-envelope"></i></span>
                                            <span class="uk-margin-small-left">@lang('client.company_contact_us_section1_box_email')</span></li>
                                    </ul>
                                </div>
                                <!-- <div>
                                    <h6 class="uk-text-uppercase uk-margin-remove-bottom">Public Relations</h6>
                                    <p class="uk-margin-small-top">For press, speaking or marketing related inquiries</p>
                                    <ul class="uk-list idz-list-contact uk-text-success uk-margin-remove-top">
                                        <li><span class="uk-label uk-label-success"><i class="fa fa-envelope"></i></span> <span class="uk-margin-small-left">public@fina.business</span></li>
                                    </ul>
                                </div> -->
                                <!-- <div>
                                    <h6 class="uk-text-uppercase uk-margin-remove-bottom">Business Plan Submissions</h6>
                                    <p class="uk-margin-small-top">For business plan submissions. Please submit here or using form below.</p>
                                    <ul class="uk-list idz-list-contact uk-text-success uk-margin-remove-top">
                                        <li><span class="uk-label uk-label-success"><i class="fa fa-envelope"></i></span> <span class="uk-margin-small-left">businessplan@fina.business</span></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="uk-card-media-bottom">
                            <div id="map"></div>
                        </div> -->
                    </div>
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <div class="uk-child-width-1-2@s uk-grid-divider idz-content-adjust2 uk-margin-small-top uk-margin-large-bottom"
                         data-uk-grid>
                        <div>
                            <h6 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_contact_us_address1_title')</h6>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.company_contact_us_address1_line1')
                                <br/>@lang('client.company_contact_us_address1_line2')
                                <br/>@lang('client.company_contact_us_address1_line3')</p> <span
                                class="uk-label uk-label-success uk-margin-small-top uk-margin-medium-bottom">@lang('client.company_contact_us_address1_tel')</span>
                        </div>
                        <div>
                            <h6 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_contact_us_address2_title')</h6>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.company_contact_us_address2_line1')
                                <br/>@lang('client.company_contact_us_address2_line2')
                                <br/>@lang('client.company_contact_us_address2_line3')</p> <span
                                class="uk-label uk-label-success uk-margin-small-top uk-margin-medium-bottom">@lang('client.company_contact_us_address2_tel')</span>
                        </div>
                        <div class="uk-width-1-1 uk-margin-remove-top uk-margin-remove-bottom">
                            <hr class="uk-visible@m">
                        </div>
                        <div class="uk-margin-remove-top uk-visible@m">
                            <h6 class="uk-text-uppercase uk-margin-medium-top uk-margin-remove-bottom">@lang('client.company_contact_us_address3_title')</h6>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.company_contact_us_address3_line1')
                                <br/>@lang('client.company_contact_us_address3_line2')
                                <br/>@lang('client.company_contact_us_address3_line3')</p> <span class="uk-label uk-label-success uk-margin-small-top">@lang('client.company_contact_us_address3_tel')</span>
                        </div>
                        <div class="uk-margin-remove-top uk-visible@m">
                            <h6 class="uk-text-uppercase uk-margin-medium-top uk-margin-remove-bottom">@lang('client.company_contact_us_address4_title')</h6>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.company_contact_us_address4_line1')
                                <br/>@lang('client.company_contact_us_address4_line2')
                                <br/>@lang('client.company_contact_us_address4_line3')</p> <span class="uk-label uk-label-success uk-margin-small-top">@lang('client.company_contact_us_address4_tel')</span>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                    <h3>@lang('client.company_contact_us_form_header')</h3>
                    <div class="notification-container" style="padding: 10px 5px">

                    </div>
                    <form id="contact-form" onsubmit="sendEmail()" class="uk-form">
                        <div class="uk-margin uk-width-2-3">
                            <input class="uk-input" id="name" name="full_name" type="text" required placeholder="@lang('client.company_contact_us_form_full_name_placeholder')">
                        </div>
                        <div class="uk-margin uk-width-2-3">
                            <input class="uk-input" id="email" name="email" type="email" required placeholder="@lang('client.company_contact_us_form_email_placeholder')"></div>
                        <div class="uk-margin uk-width-2-3">
                            <input class="uk-input" id="subject" name="subject" type="text" required placeholder="@lang('client.company_contact_us_form_subject_placeholder')">
                        </div>
                        <div class="uk-margin">
                        <textarea class="uk-textarea" id="message" rows="5" name="message" required
                                  placeholder="@lang('client.company_contact_us_form_message_placeholder')"></textarea>
                        </div>
                        <div>
                            <button class="uk-button uk-button-primary uk-float-left" id="buttonsend" type="submit"
                                    name="submit">@lang('client.company_contact_us_form_send_message')
                            </button>
                            <div class="idz-contact-loading uk-float-left uk-margin-left" id="loading" style="display: none;"><span
                                    data-uk-spinner></span>@lang('client.company_contact_us_form_please_wait')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
