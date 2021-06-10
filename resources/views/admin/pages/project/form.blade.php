{{-- extend layout --}}
@extends('admin.layout.contentLayoutMaster')
{{-- page title --}}
@section('title', $project->city_id ? __('admin.project-update') : 'admin.project-create')

@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
@endsection
{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/form-select2.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">{{$project->city_id ? __('admin.project-update') : __('admin.project-create')}}</h4>
                    {!! Form::model($project,['url' => $url, 'method' => $method]) !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <select name="city_id" class="select2 js-example-programmatic browser-default"
                                    id="programmatic-single">
                                <optgroup>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" selected>
                                            {{$city->language(app()->getLocale())? substr($city->language(app()->getLocale())->title,0,15): substr($city->language()->title,0,15)}}
                                        </option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                        <div class="col s12 mb-2">
                            <label>
                                <input type="checkbox" name="status"
                                       value="true" {{$project->status ? 'checked' : ''}}>
                                <span>{{__('admin.status')}}</span>
                            </label>
                        </div>
                        <ul class="tabs">
                            @foreach($languages as $key => $language)
                                <li class="tab col ">
                                    <a href="#lang-{{$key}}">{{$language->locale}}</a>
                                </li>
                            @endforeach
                        </ul>
                        @foreach($languages as $key => $language)
                            <div id="lang-{{$key}}" class="col s12  mt-5">
                                <div class="input-field ">
                                    {!! Form::text('title['.$key.']',$project->language($language->id) !== null ? $project->language($language->id)->title:  '',['class' => 'validate '. $errors->has('title.*') ? '' : 'valid']) !!}
                                    {!! Form::label('title['.$key.']',__('admin.title')) !!}
                                    @error('title.*')
                                    <small class="errorTxt4">
                                        <div class="error">
                                            {{$message}}
                                        </div>
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <div class="input-images"></div>
                        @if ($errors->has('images'))
                            <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            {!! Form::submit($project->city_id ? __('admin.update') : __('admin.create'),['class' => 'btn cyan waves-effect waves-light right']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

@endsection

{{-- vendor script --}}
@section('vendor-script')
    <script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{asset('js/scripts/form-select2.js')}}"></script>
@endsection