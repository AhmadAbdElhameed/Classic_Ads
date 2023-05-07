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
        <section class="dash-header-part">
            <div class="container">
                <div class="dash-header-card">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="dash-header-left">
                                <div class="dash-avatar">
                                    <a href="#"><img src="images/avatar/01.jpg" alt="avatar"></a>
                                </div>
                                <div class="dash-intro">
                                    <h4><a href="#">gackon Honson</a></h4>
                                    <h5>new seller</h5>
                                    <ul class="dash-meta">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <span>(123) 000-1234</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <span>gackon@gmail.com</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Los Angeles, West America</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dash-header-right">
                                <div class="dash-focus dash-list">
                                    <h2>2433</h2>
                                    <p>listing ads</p>
                                </div>
                                <div class="dash-focus dash-book">
                                    <h2>2433</h2>
                                    <p>total follower</p>
                                </div>
                                <div class="dash-focus dash-rev">
                                    <h2>2433</h2>
                                    <p>total review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dash-header-alert alert fade show">
                                <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and Edit your password and account details.</p>
                                <button data-dismiss="alert"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dash-menu-list">
                                <ul>
                                    <li><a href="dashboard.html">dashboard</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="ad-post.html">ad post</a></li>
                                    <li><a class="active" href="my-ads.html">my ads</a></li>
                                    <li><a href="setting.html">settings</a></li>
                                    <li><a href="bookmark.html">bookmarks</a></li>
                                    <li><a href="message.html">message</a></li>
                                    <li><a href="notification.html">notification</a></li>
                                    <li><a href="user-form.html">logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="{{asset('assetsEndUser/images/product/07.jpg')}}" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
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
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">resort</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1590<span>/per week</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/08.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">mobile</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$454<span>/fixed</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/09.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">animal</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">cat</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$235<span>/Negotiable</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/10.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge rent">rent</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">private car</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$768<span>/per month</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/11.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge booking">booking</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">Duplex house</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$1470<span>/per day</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/13.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">electronics</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">laptop</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$1550<span>/fixed</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/14.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge rent">rent</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">bike</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$90<span>/per hour</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/15.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">camera</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$1200<span>/Negotiable</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/16.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="cross-vertical-badge product-badge">--}}
{{--                                    <i class="fas fa-fire"></i>--}}
{{--                                    <span>top niche</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge booking">booking</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">luxury</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">ship</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$1200<span>/per day</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/02.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">fashion</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">shoes</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$578<span>/fixed</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/03.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge rent">rent</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">education</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">book</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$57<span>/per week</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">--}}
{{--                        <div class="product-card">--}}
{{--                            <div class="product-media">--}}
{{--                                <div class="product-img">--}}
{{--                                    <img src="images/product/04.jpg" alt="product">--}}
{{--                                </div>--}}
{{--                                <div class="product-type">--}}
{{--                                    <span class="flat-badge sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <ul class="product-action">--}}
{{--                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>--}}
{{--                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>--}}
{{--                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="product-content">--}}
{{--                                <ol class="breadcrumb product-category">--}}
{{--                                    <li><i class="fas fa-tags"></i></li>--}}
{{--                                    <li class="breadcrumb-item"><a href="#">electronics</a></li>--}}
{{--                                    <li class="breadcrumb-item active" aria-current="page">television</li>--}}
{{--                                </ol>--}}
{{--                                <h5 class="product-title">--}}
{{--                                    <a href="#">Lorem ipsum dolor sit amet consect adipisicing elit</a>--}}
{{--                                </h5>--}}
{{--                                <div class="product-meta">--}}
{{--                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>--}}
{{--                                    <span><i class="fas fa-clock"></i>30 min ago</span>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <h5 class="product-price">$246<span>/Negotiable</span></h5>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>--}}
{{--                                        <button type="button" title="Wishlist" class="far fa-heart"></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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
