<?php

namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\ProfileInterface;
use App\Models\Ads;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileRepository implements ProfileInterface
{

    public function index()
    {
        $profile = Profile::where('user_id',auth()->id())->first();
        //dd($profile);
        return view('EndUser.pages.profile.index' , compact('profile'));
    }

    public function get_my_ads(){
        $my_ads = Ads::where('user_id',auth()->id())->with('category')->get(['id', 'name', 'city', 'image', 'slug', 'price','category_id' ,'description', 'type', 'status', 'created_at']);
        //dd($my_ads);
        return view('EndUser.pages.profile.my-ads',compact('my_ads'));
    }
}
