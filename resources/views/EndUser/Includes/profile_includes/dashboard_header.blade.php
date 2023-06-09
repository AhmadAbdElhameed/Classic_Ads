
<section class="dash-header-part">
    <div class="container">
        <div class="dash-header-card">
            <div class="row">
                <div class="col-lg-5">
                    <div class="dash-header-left">
                        <div class="dash-avatar">
                            <a href="#"><img src="{{asset($profile->image)}}" alt="avatar"></a>
                        </div>
                        <div class="dash-intro">
                            <h4><a href="#">{{$profile->first_name}} {{$profile->last_name}}</a></h4>
                            <h5>new seller</h5>
                            <ul class="dash-meta">
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>{{$profile->phone}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <span>{{$profile->user->email}}</span>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{$profile->city}}, {{$profile->state}}</span>
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
                            <li><a href="{{route('endUser.profile.index')}}">Profile</a></li>
                            <li><a href="{{route('endUser.ads.create')}}">ad post</a></li>
                            <li><a  href="{{route('endUser.profile.my_ads')}}">my ads</a></li>
                            <li><a href="{{route('endUser.profile.setting.index')}}">settings</a></li>
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
