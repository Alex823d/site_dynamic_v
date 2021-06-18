@extends('client.layout.site')
@section('subhead')
@endsection

@section('wrapper')
    <section class="every_showcase catalog">
        <div class="overlay">
            <div class="wrapper content">
                <div class="path">@lang('client.home') - @lang('client.catalog')</div>
                <div class="title">@lang('client.catalog')</div>
            </div>
        </div>
    </section>

    <section class="catalog_section flex wrapper">
        <form class="filter_bar">
            @foreach($category->features as $feature)
                <div class="box">
                    <div class="title">
                        {{$feature->language(app()->getLocale())? $feature->language(app()->getLocale())->title: $feature->language()->title}}
                    </div>
                    @foreach($feature->answers as $answer)
                        <div class="option">
                            <input type="checkbox"
                                   onchange="this.form.submit()" name="feature[{{$feature->id}}][{{$answer->id}}]"
                                   id="box{{$feature->id}}_{{$answer->id}}"
                                   value="{{$answer->id}}"
                            @if(isset(Request::get('feature')[$feature->id]))
                                {{in_array($answer->id,Request::get('feature')[$feature->id]) ? 'checked' : ''}}
                                    @endif
                            >
                            <label for="box{{$feature->id}}_{{$answer->id}}">
                                {{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </form>

        <div class="cgsec">
            <div class="catalog_grid">
                @foreach($products as $product)
                    <a href="" class="catalog_item">
                        <div class="img flex">
                            <img src="{{url(count($product->files)? $product->files[0]->path.'/'.$product->files[0]->title : '')}}"
                                 alt="">
                        </div>
                        <div class="cap flex">
                            <div>
                                {{$product->language(app()->getLocale())? $product->language(app()->getLocale())->title: $product->language()->title}}
                            </div>
                            <div>${{number_format($product->price/100)}}</div>
                        </div>
                    </a>

                @endforeach
            </div>
            {{ $products->appends(request()->input())->links('client.pagination') }}
        </div>
    </section>
@endsection