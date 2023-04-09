<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['authenticate' => true]);
        }
        return response()->json(['authenticate' => false]);
    }
    function loginGoogle(Request $rd){
        return Socialite::driver('google')->redirect();
    }
    function loginGoogleCallback(Request $rd){
            $user = null;
        try{
            $user = Socialite::driver('google')->user();
        }
        catch(\Exception $e){
            return redirect('login');
        }
    }
    function loginFacebook(Request $rd){

    }
}
