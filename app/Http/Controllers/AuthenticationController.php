<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Seeders\UserSeeder;
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
        return response()->json(['authenticate' => false]);
    }
    function loginGoogle(Request $rd){
        return Socialite::driver('google')->redirect();
    }
    function loginGoogleCallback(Request $rd){

            $user = Socialite::driver('google')->stateless()->user();

            $rules = array('email' => 'unique:users,email');    //users table column email
            $validator = Validator::make(['email' => $user->getEmail()], $rules);

            if(!$validator->fails()) {  //fails mean email is already exists
                $newUser = new User();
                $newUser->name = $user->getName();
                $newUser->email = $user->getEmail();
                $newUser->save();
            }
            Auth::loginUsingId(User::whereEmail($user->getEmail())->first()->id);
            return view('homepage', ['google' => true]);

    }
    function loginFacebook(Request $rd){

    }
}
