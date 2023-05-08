<?php

namespace App\Http\Traits\EndUser;
use App\Models\Profile;
trait ProfileTrait
{
    public function getAllProfiles(){
        return Profile::all();
    }

    public function getCurrentProfile(){
        return Profile::where('user_id',auth()->id())->first();
    }
}
