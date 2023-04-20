<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function index(Request $r){
        return view('homepage');
    }
    function cookies(Request $r){
        return view('cookies');
    }
}
