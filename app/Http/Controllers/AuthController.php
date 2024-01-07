<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Common\PasswordController;
use App\Models\Cities;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signUpView(Country $countries)
    {
        return view('signup')->with(['countries' => $countries->getCountries()]);
    }
    public function signUp(Request $request, User $user)
    {
        $rules = [
            'fname' => 'required|min:3|max:50',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'dob' => 'required|before:8 year',
            'gender' => 'required|in:0,1',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            // return "Ok";
            $userdata = [
                $user->name = $request->fname,
                $user->email = $request->email,
                $user->password = md5($request->password),
                $user->dob = $request->dob,
                $user->gender = $request->gender,
                $user->country = $request->country,
                $user->state = $request->state,
                $user->city = $request->city
            ];
            if ($user->save($userdata)) {
                $mailstatus = (new MailController)->signupMail($request->name, $request->email, $request->password);
                if ($mailstatus == true) {
                    return redirect('/dashboard')->with('status', "Login Success");
                }
            } else {
                return redirect()->back()->with('status', "Sign Up fail");
            }
        }
    }
    public function logIn(Request $request, PasswordController $passwordcontroller)
    {
        $rules = [
            'email' => 'required|email|max:50',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator->errors());
        } else {
            $passwordcontroller = new PasswordController;
            $db = $passwordcontroller->getPassword($request->email);
            $dbpassword = $db[0]['password'];
            $dbuserid = $db[0]['id'];
            if (md5($request->password) == $dbpassword) {
                if (Auth::loginUsingId($dbuserid)) {
                    return redirect('/dashboard')->with('status', 'Login Successfully');
                } else {
                    return redirect('/login')->with('status', "Login Unsuccessful");
                }
            } else {
                return redirect('/login')->with('status', "Incorrect Creadintials");
            }
        }
    }
    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
