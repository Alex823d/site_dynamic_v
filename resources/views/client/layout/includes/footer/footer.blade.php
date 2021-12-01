<footer>
        <div class="uk-container uk-light">
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-4@l uk-width-1-5@m uk-width-1-3@s">
                    <ul class="uk-list">
                        <li><a href="/{{ request()->segment(1) }}/company/about-us">@lang('client.header_menu_company_about_us')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/company/testimonials">@lang('client.header_menu_company_testimonials')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/company/faq">@lang('client.header_menu_company_faq')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/company/contact-us">@lang('client.header_menu_company_contact_us')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/investment">@lang('client.header_menu_investment')</a></li>
                        <li><a href="/{{ request()->segment(1) }}/education">@lang('client.header_menu_education')</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m">
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": "100%",
  "height": 450,
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "FOREXCOM:SPXUSD",
          "displayName": "S&P 500"
        },
        {
          "name": "FOREXCOM:NSXUSD",
          "displayName": "Nasdaq 100"
        },
        {
          "name": "FOREXCOM:DJI",
          "displayName": "Dow 30"
        },
        {
          "name": "INDEX:NKY",
          "displayName": "Nikkei 225"
        },
        {
          "name": "INDEX:DEU30",
          "displayName": "DAX Index"
        },
        {
          "name": "FOREXCOM:UKXGBP",
          "displayName": "FTSE 100"
        }
      ]
    },
    {
      "name": "Commodities",
      "originalName": "Commodities",
      "symbols": [
        {
          "name": "CME_MINI:ES1!",
          "displayName": "S&P 500"
        },
        {
          "name": "CME:6E1!",
          "displayName": "Euro"
        },
        {
          "name": "COMEX:GC1!",
          "displayName": "Gold"
        },
        {
          "name": "NYMEX:CL1!",
          "displayName": "Crude Oil"
        },
        {
          "name": "NYMEX:NG1!",
          "displayName": "Natural Gas"
        },
        {
          "name": "CBOT:ZC1!",
          "displayName": "Corn"
        }
      ]
    },
    {
      "name": "Bonds",
      "originalName": "Bonds",
      "symbols": [
        {
          "name": "CME:GE1!",
          "displayName": "Eurodollar"
        },
        {
          "name": "CBOT:ZB1!",
          "displayName": "T-Bond"
        },
        {
          "name": "CBOT:UB1!",
          "displayName": "Ultra T-Bond"
        },
        {
          "name": "EUREX:FGBL1!",
          "displayName": "Euro Bund"
        },
        {
          "name": "EUREX:FBTP1!",
          "displayName": "Euro BTP"
        },
        {
          "name": "EUREX:FGBM1!",
          "displayName": "Euro BOBL"
        }
      ]
    },
    {
      "name": "Forex",
      "originalName": "Forex",
      "symbols": [
        {
          "name": "FX:EURUSD"
        },
        {
          "name": "FX:GBPUSD"
        },
        {
          "name": "FX:USDJPY"
        },
        {
          "name": "FX:USDCHF"
        },
        {
          "name": "FX:AUDUSD"
        },
        {
          "name": "FX:USDCAD"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                </div>

                <div class="uk-width-1-1 uk-margin-large-top uk-margin-large-bottom">
                    <!-- logo footer begin -->
                    <div id="footer-logo">

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                          <div class="tradingview-widget-container__widget"></div>
                          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
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
                                      "colorTheme": "dark",
                                      "isTransparent": true,
                                      "showSymbolLogo": true,
                                      "locale": "en"
                                    }
                          </script>
                        </div>
                    <!-- TradingView Widget END -->


                    </div>
                    <!-- logo footer end -->

                     <!--
                    <div class="uk-margin-small-top">
                        <p class="footer-p">This site is being operated by Fina Corporation, First Floor, First St Vincent Bank Ltd Building, James Street, Kingstown, Saint Vincent and the Grenadines</p>
                    </div>
                     -->

                    <div class="footer-logo-wrapper">
                         <a class="uk-logo" href="/{{ request()->segment(1) }}"><img src="/client/images/logo_footer.png" width="150px" alt="fina finance" /></a>
                    </div>
                   <p class="footer-copy footer-p">
                        <span>Copyright ©2012-2021</span>
                        <span>This website is operated by </span>
                        <span>
                            <img src="/client/images/invest-group-i.png" alt="fina finance">
                        </span>


                    </p>



                </div>
            </div>
        </div>
        <a class="uk-inline" href="#" data-uk-totop data-uk-scroll data-uk-scrollspy="cls: uk-animation-fade; hidden: true; offset-top: 100px; repeat: true"></a>
    </footer>
