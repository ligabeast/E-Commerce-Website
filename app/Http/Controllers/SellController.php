<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SellController extends Controller
{
    function index(Request $rd){
        return view('sellPage');
    }

    function listArticleToSell(Request $rd){
        return view('listItem');
    }
}
