@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.investment_meta_title')</title>
    <meta name="description"
          content="@lang('client.investment_meta_description')">
@endsection

@section('page')
<section id="pagetitle-container">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                    <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                    <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_investment')</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="uk-margin-large-bottom">
    <div class="uk-container">
        <div class="uk-grid uk-margin-medium-top">
            <div class="uk-width-1-1 uk-margin-medium-bottom">
                <h2 class="uk-margin-remove-bottom">@lang('client.investment_section1_header')</h2>
                <h3 class="uk-margin-remove-top idz-thin">@lang('client.investment_section1_subheader')</h3>
                <p class="uk-text-lead">@lang('client.investment_section1_text')</p>
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-margin-medium-top" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card green">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square1_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section1_square1_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card blue">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square2_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section1_square2_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card purple">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square3_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section3_square1_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card midnight">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square4_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section1_square4_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card grey">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square5_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section1_square5_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-primary uk-card-small uk-card-body uk-inline idz-invest-card orange">
                            <h6 class="uk-text-uppercase uk-margin-small-bottom">@lang('client.investment_section1_square6_header')</h6>
                            <p class="uk-margin-remove-top">@lang('client.investment_section1_square6_text')</p>
                            <div class="uk-position-bottom-right"> <a href="https://client.finacapital.net/en-US/Account/Register"><i class="fa fa-2x fa-angle-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-top">
                <div class="uk-child-width-1-2@m" data-uk-grid>
                    <div class="uk-width-2-3@l uk-width-1-1@s">
                        <div class="uk-grid-small uk-flex-top uk-margin-bottom" data-uk-grid>
                            <div class="uk-width-auto">
                                <div class="idz-icon-circle uk-margin-small-bottom"> <i class="fa fa-2x fa-money"></i> </div>
                            </div>
                            <div class="uk-width-expand uk-margin-small-left">
                                <h3 class="uk-margin-small-bottom">@lang('client.investment_section2_header')</h3>
                                <p class="uk-margin-remove-top">@lang('client.investment_section2_text')</p>
                                <div class="uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid>
                                    <div>
                                        <ul class="uk-list idz-list-check">
                                            <li>@lang('client.investment_section2_check1_text')</li>
                                            <li>@lang('client.investment_section2_check2_text')</li>
                                            <li>@lang('client.investment_section2_check3_text')</li>
                                            <li>@lang('client.investment_section2_check4_text')</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-list idz-list-check">
                                            <li>@lang('client.investment_section2_check5_text')</li>
                                            <li>@lang('client.investment_section2_check6_text')</li>
                                            <li>@lang('client.investment_section2_check7_text')</li>
                                            <li>@lang('client.investment_section2_check8_text')</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@l uk-width-1-1@s">
                        <h3 class="uk-margin-small-bottom">@lang('client.investment_section2_table_header')</h3>
                        <table class="uk-table uk-table-striped uk-text-center">
                            <thead>
                            <tr>
                                <th class="uk-text-center">@lang('client.investment_section2_table_th1')</th>
                                <th class="uk-text-center">@lang('client.investment_section2_table_th2')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>@lang('client.investment_section2_table_row1_col1')</td>
                                <td>@lang('client.investment_section2_table_row1_col2')</td>
                            </tr>
                            <tr>
                                <td>@lang('client.investment_section2_table_row2_col1')</td>
                                <td>@lang('client.investment_section2_table_row2_col2')</td>
                            </tr>
                            <tr>
                                <td>@lang('client.investment_section2_table_row2_col1')</td>
                                <td>@lang('client.investment_section2_table_row2_col2')</td>
                            </tr>
                            </tbody>
                        </table> <!-- <a class="uk-button uk-button-text uk-align-right" href="#">See full Shares table</a> --> </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-margin-medium-top">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-expand@l uk-width-1-1@s">
                            <p class="uk-text-large">@lang('client.investment_section2_text2')</p>
                        </div>
                        <div class="uk-width-auto@l uk-width-1-1@s"> <a class="uk-button uk-button-primary" href="https://client.finacapital.net/en-US/Account/Register">@lang('client.investment_section2_create_account_button')</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
