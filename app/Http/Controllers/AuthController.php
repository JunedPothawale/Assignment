<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signUpView(Request $request, Cities $cities, State $states, Country $countries)
    {
        return view('signup')->with(['countries' => $countries->getCountries()]);
    }
    public function signUp(Request $request)
    {
        $rules = [
            'fname' => 'required|min:3|max:50',
            'email' => 'required|unique:user',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'dob' => 'required|before:8 year',
            'gender' => 'required|in:0,1',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {

        }
    }
    public function logIn(Request $request)
    {
        $rules = [
            'email' => 'required|email|max:50',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator);
        } else {
            $creadintials = ['email' => $request->email, 'password' => $request->password];
            if (Auth::attempt($creadintials)) {
                return redirect('/dashboard')->with('status', 'Login Successfully');
            } else {
                return redirect('/login')->with('status', "Incorrect Creadintials");
            }
        }
    }
}
