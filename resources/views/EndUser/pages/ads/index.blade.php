
@extends('EndUser.Includes.master')

@section('title')
    {{ __('ads.ad page')}}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assetsEndUser') }}css/custom/ad-post.css">
@endpush

@section('content')


    <!DOCTYPE html>

    <body>


    <!--=====================================
                MOBILE-NAV PART END
    =======================================-->


    <!--=====================================
              SINGLE BANNER PART START
    =======================================-->
    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>ad post</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('endUser.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ad-post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
              SINGLE BANNER PART END
    =======================================-->


    <!--=====================================
            DASHBOARD HEADER PART START
    =======================================-->
   @include('EndUser.Includes.profile_includes.dashboard_header')
    <!--=====================================
            DASHBOARD HEADER PART END
    =======================================-->


    <!--=====================================
                AD POST PART START
    =======================================-->
    <section class="adpost-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form class="adpost-form" action="{{route("endUser.ads.store")}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="adpost-card">
                            <div class="adpost-title">
                                <h3>{{__("ads.Ad Information")}}</h3>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
{{--                                        <label class="form-label"> {{ __('ads.ad_name_in_arabic')}}   </label>--}}
{{--                                        <input type="text" name = "name_ar" class="form-control" value="{{old("name_ar")}}" >--}}
                                        <label class="form-label">ad  name in arabic </label>
                                        <input type="text" name = "name_ar" class="form-control" value="{{ old('name_ar') }}" placeholder="Type your ad title here">
                                    </div>
                                </div>
                                @if ($errors->has('name_ar'))
                                    <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
{{--                                        <label class="form-label"> {{ __('ads.ad_name_in_english')}} </label>--}}
{{--                                        <input type="text" name = "name_en" class="form-control" value="{{old("name_en")}}" >--}}
                                        <label class="form-label">ad name in english </label>
                                        <input type="text" name = "name_en" class="form-control" value="{{ old('name_en') }}" placeholder="Type your ad title here">
                                    </div>
                                </div>
                                @if ($errors->has('name_en'))
                                    <span class="text-danger">{{ $errors->first('name_en') }}</span>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> {{ __('ads.ad_city')}}  </label>
                                        <input type="text" name = "city" class="form-control" value="{{old("city")}}" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('ads.ad_image')}}</label>
                                        <input type="file" name = "image"  value="{{old("image")}}"  class="form-control">
                                    </div>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> {{ __('ads.ad_description')}} </label>
                                        {{-- <input type="texta" name = "description" value="{{old("name_ar")}}"  class="form-control"> --}}
                                        <textarea name="description" id="" cols="30" rows="10" value="{{old("description")}}"  class="form-control" >
                                            </textarea>
                                    </div>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('ads.ad_category')}} </label>
                                        <select class="form-control custom-select" name = "category_id">
                                            <option selected >{{ __('ads.select_category')}} </option>

                                            @foreach ($categories as $category)
                                                <option value={{$category->id}}> {{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">{{ __('ads.price')}}</label>
                                        <input type="text" name = "price" class="form-control" >
                                    </div>
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">{{ __('ads.choose_the_type')}}</label>
                                <select class="form-control custom-select" name="type">
                                    <option selected>{{__('ads.choose_the_type')}}</option>
                                    <option value="new"> {{__("ads.new")}}</option>
                                    <option value="used"> {{__("ads.used")}}</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary"> {{__("ads.create")}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                ADPOST PART END
    =======================================-->


    <!--=====================================
                FOOTER PART PART
    =======================================-->
    @include('EndUser.Includes.main_footer')
    <!--=====================================
                FOOTER PART END
    =======================================-->


    <!--=====================================
              CURRENCY MODAL PART START
    =======================================-->
    @include('EndUser.Includes.modal_part')
    <!--=====================================
              CURRENCY MODAL PART END
    =======================================-->


    <!--=====================================
              LANGUAGE MODAL PART END
    =======================================-->
    @include('EndUser.Includes.language')






