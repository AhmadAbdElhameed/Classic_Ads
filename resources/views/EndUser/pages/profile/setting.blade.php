<!DOCTYPE html>
<html lang="en">
<head>
    <!--=====================================
                META-TAG PART START
    =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- AUTHOR META -->
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">

    <!-- TEMPLATE META -->
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <!--=====================================
                META-TAG PART END
    =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>Setting - Classicads</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <!-- FONTS -->
  @include('EndUser.Includes.head')
    <link rel="stylesheet" href="{{asset('assetsEndUser/css/custom/setting.css')}}">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>
<body>
<!--=====================================
            HEADER PART START
=======================================-->
@include('EndUser.Includes.nav')
<!--=====================================
            HEADER PART END
=======================================-->


<!--=====================================
            SIDEBAR PART START
=======================================-->
@include('EndUser.Includes.sidebar')
<!--=====================================
            SIDEBAR PART END
=======================================-->


<!--=====================================
            MOBILE-NAV PART START
=======================================-->
<nav class="mobile-nav">
    <div class="container">
        <div class="mobile-group">
            <a href="index.html" class="mobile-widget">
                <i class="fas fa-home"></i>
                <span>home</span>
            </a>
            <a href="user-form.html" class="mobile-widget">
                <i class="fas fa-user"></i>
                <span>join me</span>
            </a>
            <a href="ad-post.html" class="mobile-widget plus-btn">
                <i class="fas fa-plus"></i>
                <span>Ad Post</span>
            </a>
            <a href="notification.html" class="mobile-widget">
                <i class="fas fa-bell"></i>
                <span>notify</span>
                <sup>0</sup>
            </a>
            <a href="message.html" class="mobile-widget">
                <i class="fas fa-envelope"></i>
                <span>message</span>
                <sup>0</sup>
            </a>
        </div>
    </div>
</nav>
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
                    <h2>setting</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">setting</li>
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
            SETTING PART START
=======================================-->
<div class="setting-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="account-card alert fade show">
                    <div class="account-title">
                        <h3>Edit Profile</h3>
                        <button data-dismiss="alert">close</button>
                    </div>
                    <form class="setting-form" method="post" enctype="multipart/form-data" action="{{route('endUser.profile.setting.update')}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    @if($errors->has('first_name'))
                                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                                    @endif

                                    <input type="text" class="form-control" value="{{$profile->first_name}}"  name="first_name" placeholder="FirstName">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    @if($errors->has('last_name'))
                                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                                    @endif

                                    <input type="text" class="form-control" value="{{$profile->last_name}}"  name="last_name" placeholder="Hasan">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Company</label>
                                    <input type="text" class="form-control" value="{{$profile->company}}" name="company" placeholder="Classicads Advertising LID.">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    @if($errors->has('address'))
                                        <span class="text-danger">{{$errors->first('address')}}</span>
                                    @endif

                                    <input type="text" class="form-control"  value="{{$profile->address}}" name="address" placeholder="1420, West Jalkuri, Narayanganj, Bangladesh">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    @if($errors->has('city'))
                                        <span class="text-danger">{{$errors->first('city')}}</span>
                                    @endif
                                    <input type="text" class="form-control"  {{$profile->city}} name="city" placeholder="Narayanganj">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    @if($errors->has('state'))
                                        <span class="text-danger">{{$errors->first('state')}}</span>
                                    @endif
                                    <input type="text" class="form-control" name="state" value="{{$profile->state}}" placeholder="West Jalkuri">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Post Code</label>
                                    <input type="text" class="form-control"  name="post_code"  value="{{$profile->post_code}}" placeholder="1420">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Country</label>
                                    @if($errors->has('country'))
                                        <span class="text-danger">{{$errors->first('country')}}</span>
                                    @endif

                                    <input type="text" class="form-control" name="country" value="{{$profile->country}}" placeholder="Bangladesh">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" value="{{$profile->website}}" placeholder="https://mironmahmud.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    @if($errors->has('phone'))
                                        <span class="text-danger">{{$errors->first('phone')}}</span>
                                    @endif
                                    <input type="text" class="form-control"  name="phone" value="{{$profile->phone}}" placeholder="+8801838288389">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    @if($errors->has('birth'))
                                        <span class="text-danger">{{$errors->first('birth')}}</span>
                                    @endif
                                    <input type="date" class="form-control"   name="birth" value="{{$profile->birth}}" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-inline">
                                    <i class="fas fa-user-check"></i>
                                    <span>update profile</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================
            SETTING PART END
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
<!--=====================================
           LANGUAGE MODAL PART END
=======================================-->


<!--=====================================
            JS LINK PART START
=======================================-->
<!-- VENDOR -->
@include('EndUser.Includes.footer')
<!--=====================================
            JS LINK PART END
=======================================-->
</body>
</html>





