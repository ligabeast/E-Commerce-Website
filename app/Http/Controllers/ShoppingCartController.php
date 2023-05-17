<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    function index(Request $rd){
        return view('shoppingCart', ['items' => ShoppingCart::whereUserId(Auth::id())->join('articles', 'shopping_cart.article_id','=','articles.id')->get()]);
    }
    function addItem(string $user_id,string $article_id){
        $message = "";
        $item = ShoppingCart::whereUserId($user_id)->where('article_id', '=',$article_id)->first();
        if($item == null){
            $newItem = new ShoppingCart();
            $newItem->user_id = $user_id;
            $newItem->article_id = $article_id;
            $newItem->created_at = Carbon::now()->toDateTimeString();
            $newItem->save();
            $message = "Item was added to ShoppingCart";
        }
        else{
            $message = "Item already in ShoppingCart";
        }
        return response()->json(['result' => $message]);
    }
    function removeItem(string $user_id,string $article_id){
        $message = "";
        $user = Auth::id();
        $item = ShoppingCart::whereUserId($user_id)->where('article_id', '=',$article_id)->first();
        if($item == null){
            $message = "Item is not in your ShoppingCart";
        }else{
            ShoppingCart::whereUserId($user_id)->where('article_id', '=',$article_id)->delete();
            $message = "Item removed";
        }
        return response()->json(['result' => $message]);
    }
}
