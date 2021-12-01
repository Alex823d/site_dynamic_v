@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.company_testimonials_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_testimonials_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_testimonials')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-1-1">
                    <h2 class="uk-margin-remove-bottom uk-text-center">@lang('client.company_testimonials_header')</h2>
                    <p class="uk-margin-small-top uk-text-lead uk-text-center">@lang('client.company_testimonials_text')</p>
                    <div class="uk-margin-medium-top uk-margin-medium-bottom">
                        <hr> </div>
                    <div class="uk-child-width-1-2@m uk-grid-match" data-uk-grid>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card1_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team1.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card1_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card1_info')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card2_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team3.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card2_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card2_info')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card3_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team4.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card3_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card3_info')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card4_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team7.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card4_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card4_info')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card5_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team8.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card5_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card5_info')</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="idz-testimonials">
                                <div class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-bottom">
                                    <blockquote cite="#">
                                        <p>@lang('client.company_testimonials_card6_text')</p>
                                    </blockquote>
                                </div> <img class="uk-border-circle uk-margin-left uk-float-left" src="/client/images/content/team2.jpg" alt="">
                                <div class="uk-margin-left uk-margin-small-top uk-float-left">
                                    <h6>@lang('client.company_testimonials_card6_full_name')</h6>
                                    <p class="uk-margin-small-top uk-text-small uk-text-uppercase">@lang('client.company_testimonials_card6_info')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
