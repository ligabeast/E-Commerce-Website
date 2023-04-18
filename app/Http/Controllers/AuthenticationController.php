<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['authenticate' => true, 'name' => Auth::user()->name]);
        }
        Auth::logout();
        return response()->json(['authenticate' => false]);
    }
    function loginGoogle(Request $rd){
        return Socialite::driver('google')->redirect();
    }
    function loginGoogleCallback(Request $rd){

        try {
            $user = Socialite::driver('google')->stateless()->user();

            $rules = array('email' => 'unique:users,email');    //users table column email
            $validator = Validator::make(['email' => $user->getEmail()], $rules);

            if (!$validator->fails()) {  //fails mean email is already exists
                $newUser = new User();
                $newUser->name = $user->getName();
                $newUser->email = $user->getEmail();
                $newUser->save();
            }
            Auth::loginUsingId(User::whereEmail($user->getEmail())->first()->id);
            return view('homepage', ['angemeldet' => true]);
        }
        catch(\Exception $e){
            abort(404);
        }
    }
    function loginFacebook(Request $rd){
        return Socialite::driver('facebook')->redirect();
    }
    function loginFacebookCallback(Request $rd){
        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            $rules = array('email' => 'unique:users,email');    //users table column email
            $validator = Validator::make(['email' => $user->getEmail()], $rules);

            if (!$validator->fails()) {  //fails mean email is already exists
                $newUser = new User();
                $newUser->name = $user->getName();
                $newUser->email = $user->getEmail();
                $newUser->save();
            }
            Auth::loginUsingId(User::whereEmail($user->getEmail())->first()->id);
            return view('homepage', ['angemeldet' => true]);
        }
        catch(\Exception $e){
            abort(404);
        }
    }
    function logout(Request $rd){
        if(Auth::check()){
            $name = Auth::user()->name;
            Auth::logout();
            return response()->json(['successful' => true, 'name' => $name]);
        }
        return response()->json(['successful' => false]);
    }
    function register(Request $rd){
        $checkEmail = User::whereEmail($rd->email)->get()->count();
        if($checkEmail != 0){   //email already registerd
            return response()->json(['successful' => false]);
        }else{
            $user = new User();
            $user->name = $rd->name;
            $user->password = Hash::make($rd->password);
            $user->email = $rd->email;

            $user->save();
            return response()->json(['successful' => true]);
        }
    }
    function disableSession(Request $rd){

    }

}
