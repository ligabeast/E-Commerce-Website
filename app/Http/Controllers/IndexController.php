<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    function index(Request $r){
        return view('homepage');
    }
}
