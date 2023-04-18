<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ShoppingCartController extends Controller
{
    function index(Request $rd){
        return view('shoppingCart');
    }
}
