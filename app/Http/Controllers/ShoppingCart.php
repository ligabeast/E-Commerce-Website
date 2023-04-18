<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShoppingCart extends Controller
{
    function index(Request $rd){
        return view('shoppingCart');
    }
}
