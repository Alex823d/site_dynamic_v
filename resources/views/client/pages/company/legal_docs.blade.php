@extends('client.layout.base')
@section('subhead')
    <title>@lang('client.company_legal_docs_meta_title')</title>
    <meta name="description"
          content="@lang('client.company_legal_docs_meta_description')">
@endsection
@section('page')
    <section id="pagetitle-container">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb uk-margin-top uk-float-right">
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_home')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_company')</a></li>
                        <li><a href="/{{ request()->segment(1) }}">@lang('client.header_menu_legal_docs')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-margin-top uk-margin-large-bottom">
        <div class="uk-container">
            <div class="uk-grid uk-margin-medium-top">
                <div class="uk-width-1-1">
                    <h4 class="uk-margin-small-bottom">@lang('client.company_legal_docs_header')</h4>
                    <div class="uk-child-width-1-3@m" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card1_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card1_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/general-agreement.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card2_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card2_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/RISK_DISCLOSURE.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-secondary uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card3_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card3_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/privacy-policy.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                    </div>
                    <div class="uk-child-width-1-3@m" data-uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card4_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card4_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/REFUND_POLICY.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-primary uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card5_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card5_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/aml.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-secondary uk-card-body">
                                <h5 class="uk-text-uppercase uk-margin-remove-bottom">@lang('client.company_legal_docs_card6_header')</h5>
                                <p class="uk-margin-small-top">@lang('client.company_legal_docs_card6_text')</p> <a class="uk-button uk-button-primary" href="/client/company/legal-docs/documents/{{ request()->segment(1) }}/kyc.pdf" target="_blank">@lang('client.company_legal_docs_card_download_button')</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
