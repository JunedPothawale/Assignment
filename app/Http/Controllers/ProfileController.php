<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Common\CommonController;
use App\Models\Cities;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function viewUserDetails(User $user, Country $country, Cities $cities, State $state)
    {
        $userdata = $user->find(auth()->user()->id)->first(['name', 'email', 'dob', 'gender', 'country', 'state', 'city']);
        $common = new CommonController;
        $userdata->gender = $common->genderConverter($userdata->gender);
        $userdata->country = $country->find($userdata->country)->country;
        $userdata->city = $cities->find($userdata->city)->city;
        $userdata->state = $state->find($userdata->state)->state;

        return view('dashboard.profile', ['userdata' => $userdata]);
    }
}
