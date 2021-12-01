@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.education_meta_title')</title>
    <meta name="description"
          content="@lang('client.education_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_education')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-3-5@l uk-width-2-3@m uk-width-1-1@s">
                    <div class="uk-label uk-label-success uk-margin-small-bottom uk-margin-top">@lang('client.education_section1_label')</div>
                    <h2 class="uk-margin-small-top uk-margin-remove-bottom">@lang('client.education_section1_header')</h2>
                    <p class="uk-text-lead uk-margin-small-bottom">@lang('client.education_section1_text')</p>
                    <p class="uk-text-lead uk-text-success uk-margin-top"><span class="uk-text-bold">@lang('client.education_section1_point1')</span>&nbsp; ~ &nbsp;<span class="uk-text-bold">@lang('client.education_section1_point2')</span>&nbsp; ~ &nbsp;<span class="uk-text-bold">@lang('client.education_section1_point3')</span></p>
                </div>
                <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-1@s">
                    <div class="uk-card uk-card-medium uk-card-secondary uk-card-body uk-margin-top">
                        <h6 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.education_section1_square_header')</h6>
                        <p class="uk-margin-small-top">@lang('client.education_section1_square_text')</p> <a class="uk-button uk-button-primary" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.education_section1_square_contactus_button')</a> </div>
                </div>
                <div class="uk-width-1-1 uk-margin-medium-top">
                    <h3>@lang('client.education_section1_header2')</h3>
                    <div class="uk-child-width-1-3@m idz-education" data-uk-grid>
                        <div class="uk-width-1-3@l uk-width-1-2@s"> <i class="fa fa-4x fa-users"></i> <span class="uk-text-large uk-text-top uk-text-success uk-margin-left">@lang('client.education_section1_row1_header')</span> </div>
                        <div class="uk-width-expand uk-visible@l">
                            <p class="uk-margin-left">@lang('client.education_section1_row1_text')</p>
                        </div>
                        <div class="uk-width-1-5@l uk-width-1-2@s"> <a class="uk-button uk-button-primary uk-width-small uk-align-right idz-content-adjust1 uk-margin-small-top" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.education_section1_row_button')</a> </div>
                    </div>
                    <hr>
                    <div class="uk-child-width-1-3@m idz-education" data-uk-grid>
                        <div class="uk-width-1-3@l uk-width-1-2@s"> <i class="fa fa-4x fa-wrench"></i> <span class="uk-text-large uk-text-top uk-text-success uk-margin-left">@lang('client.education_section1_row2_header')</span> </div>
                        <div class="uk-width-expand uk-visible@l">
                            <p class="uk-margin-left">@lang('client.education_section1_row2_text')</p>
                        </div>
                        <div class="uk-width-1-5@l uk-width-1-2@s"> <a class="uk-button uk-button-primary uk-width-small uk-align-right idz-content-adjust1 uk-margin-small-top" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.education_section1_row_button')</a> </div>
                    </div>
                    <hr>
                    <div class="uk-child-width-1-3@m idz-education" data-uk-grid>
                        <div class="uk-width-1-3@l uk-width-1-2@s"> <i class="fa fa-4x fa-area-chart"></i> <span class="uk-text-large uk-text-top uk-text-success uk-margin-left">@lang('client.education_section1_row3_header')</span> </div>
                        <div class="uk-width-expand uk-visible@l">
                            <p class="uk-margin-left">@lang('client.education_section1_row3_text')</p>
                        </div>
                        <div class="uk-width-1-5@l uk-width-1-2@s"> <a class="uk-button uk-button-primary uk-width-small uk-align-right idz-content-adjust1 uk-margin-small-top" href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.education_section1_row_button')</a> </div>
                    </div>
                    <hr> </div>
                <div class="uk-width-1-1 uk-margin-medium-top">
                    <!-- <div class="idz-education uk-text-center"> <a class="uk-button uk-button-default uk-width-medium" href="">E-Books</a></div> -->
                </div>
                <div class="uk-width-1-1 uk-margin-medium-top">
                    <div class="uk-card uk-card-primary uk-card-body uk-background-fixed uk-background-center-center" style="background-image: url(client/images/content/content_background7.jpg);">
                        <div class="uk-child-width-1-2@l uk-child-width-2-4@m " data-uk-grid>
                            <div>
                                <h3 class="uk-text-uppercase uk-margin-remove-bottom ">@lang('client.education_section2_header')</h3>
                                <p class="uk-text-lead uk-margin-small-top ">@lang('client.education_section2_text')</p>
                                <a class="uk-button uk-button-primary " href="https://client.finacapital.net/en-US/Account/Register">@lang('client.education_section2_register_button')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
