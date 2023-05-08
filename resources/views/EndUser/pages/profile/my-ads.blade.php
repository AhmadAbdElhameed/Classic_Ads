@extends('EndUser.Includes.master')

@section('title')
    My Ads
@endsection


@section('content')

        <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner dashboard-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>my ads</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">my-ads</li>
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
                    MY ADS PART START
        =======================================-->
        <section class="myads-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-filter">
                            <div class="filter-show">
                                <label class="filter-label">Show :</label>
                                <select class="custom-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </div>
                            <div class="filter-short">
                                <label class="filter-label">Short by :</label>
                                <select class="custom-select filter-select">
                                    <option selected>all ads</option>
                                    <option value="3">booking ads</option>
                                    <option value="2">rental ads</option>
                                    <option value="1">sale ads</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($my_ads as $my_ad)
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img">
                                        <img src="{{asset($my_ad->image)}}" alt="product">
                                    </div>
                                    <div class="cross-vertical-badge product-badge">
                                        <i class="fas fa-fire"></i>
                                        <span>top niche</span>
                                    </div>
                                    <div class="product-type">
                                        <span class="flat-badge booking">{{$my_ad->type}}</span>
                                    </div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#">{{$my_ad->category->Department->name}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$my_ad->category->name}}</li>
                                    </ol>
                                    <h5 class="product-title">
                                        <a href="#">{{$my_ad->name}}</a>
                                    </h5>
                                    <div class="product-meta">
                                        <span><i class="fas fa-map-marker-alt"></i>{{$my_ad->city}}</span>
                                        <span><i class="fas fa-clock"></i>{{$my_ad->created_at}}</span>
                                    </div>
                                    <div class="product-info">
                                        <h5 class="product-price">$ {{$my_ad->price}}</h5>
                                        <div class="product-btn">
                                            <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                            <button type="button" title="Wishlist" class="far fa-heart"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-pagection">
                            <p class="page-info">Showing 12 of 60 Results</p>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">67</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    MY ADS PART END
        =======================================-->
@endsection
