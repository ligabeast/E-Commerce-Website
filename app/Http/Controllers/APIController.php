<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    function getArticles(Request $rd, string $id = ''){
        $search = $rd->search ?? '';
        $limit = $rd->limit ?? 1000000;
        $offset = $rd->offset ?? 0;
        $post_name = $rd->name ?? '';
        $post_state = $rd->state ?? 'Neu';
        $post_price = $rd->price ?? '';
        $post_description = $rd->description ?? 'Nicht vorhanden';

        if($post_name && $post_price && $post_price > 0 && !$id){
            if(!Auth::check()){
                return response()->json(['id' => 'Not Authenticated']);
            }
            $article = new Article();
            $article->state = $post_state;
            $article->name = $post_name;
            $article->price = $post_price;
            $article->creator_id = Auth::id();
            $article->description = $post_description;
            $article->save();
            return response()->json(['id' => $article->id]);
        }
        else if($rd->isMethod('delete')){
            $msg = "";
            if(Article::whereId($id)->first()){
                Article::whereId($id)->delete();
                $msg = "Article deleted";
            }
            else{
                $msg = "Article not found";
            }
            return response()->json(['result' => $msg]);
        }else if(!$id){
            return response()->json(json_encode(Article::where('name','Like','%'.$search.'%')->offset($offset)->limit($limit)->get()));
        }
        else{
            return response()->json(json_encode(Article::whereId($id)->get()));
        }
        return response()->json(['result' => 'invalid Request']);
    }
    function getShoppingCart(Request $rd){
        $articles = null;
        if(Auth::check()){
            $articles = ShoppingCart::whereUserId(Auth::id())->join('articles','shopping_cart.article_id','=','articles.id')->get('articles.id');
        }
        else {
            $articles = [];
        }
        return response()->json(json_encode($articles));
    }
}
