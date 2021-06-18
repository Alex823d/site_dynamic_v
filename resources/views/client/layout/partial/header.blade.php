<header class="header">
    <div class="header_content flex wrapper">
        <a href="{{locale_route('home.index')}}" class="logo">
            <img src="/client/img/logo/logo.png" alt=""/>
        </a>
        <div class="navbar">
            <a href="{{locale_route('home.index')}}" class="nav_link">@lang('client.home')</a>
            <div class="nav_link drop">
                <a href="" onclick="return false;" class="cat">@lang('client.category')</a>
                <div class="dropdown">
                    @foreach($gcategories as $category)
                        <a href="{{locale_route('catalog.index',$category->slug)}}" class="link">
                            {{$category->language(app()->getLocale())? $category->language(app()->getLocale())->title: $product->language()->title}}
                        </a>
                    @endforeach
                </div>
            </div>
            <a href="{{locale_route('client.project.index')}}" class="nav_link">Projects</a>
            <a href="{{locale_route('portfolio.index')}}" class="nav_link">
                @lang('client.portfolios')
            </a>
            <div class="nav_link drop">
                <a href="{{locale_route('about.index')}}" class="cat">@lang('client.about_us')</a>
                <div class="dropdown">
                    <a href="{{locale_route('salon.index')}}" class="link">
                        @lang('client.salons')
                    </a>
                    <a href="{{locale_route('sitemap.index')}}" class="link">
                        @lang('client.sitemap')
                    </a>
                    <a href="{{locale_route('timeline.index')}}" class="link">
                        @lang('client.timeline')
                    </a>
                    <a href="{{locale_route('principle.index')}}" class="link">
                        @lang('client.principle')
                    </a>
                    <a href="{{locale_route('certificate.index')}}" class="link">
                        @lang('client.certificates')
                    </a>
                </div>
            </div>
            <a href="{{locale_route('contact.index')}}" class="nav_link">
                @lang('client.contact_us')
            </a>
        </div>
        <div class="languages">
            <div class="lang_on">
                {{$localizations['current']['title']}}
            </div>
            @if(isset($localizations['data']))
                <div class="dropdown">
                    @foreach($localizations['data'] as $language)
                        <a href="{{$language['url']}}" class="lang">
                            {{$language['title']}}
                        </a>

                    @endforeach
                </div>
            @endif
        </div>
        <div class="burger_menu"></div>
    </div>
</header>