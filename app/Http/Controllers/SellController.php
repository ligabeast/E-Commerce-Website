<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SellController extends Controller
{
    function index(Request $rd){
        if(!Auth::check()){
            return abort(401);
        }
        return view('sellPage',['quantityActive' => Article::whereCreatorId(Auth::id())->count()]);
    }

    function listArticleToSell(Request $rd){
        if(!Auth::check()){
            return abort(401);
        }
        $categorys = ArticleCategory::all('name');
        return view('listItemCategory',compact('categorys'));
    }

    function listArticleInCategory(Request $rd){
        if(ArticleCategory::where('name','=',$rd->category)->first()) { //exists
            return view('listItem',['category' => $rd->category]);
        }
        if(!Auth::check()){
            return abort(401);
        }
        return view('listItemNotFound');
    }

    function postArticle(Request $rd){
        if($rd->state && ($rd->state == 'Gebraucht' || $rd->state == 'Neu') && $rd->title && $rd->category && $rd->description && $rd->price && Auth::check()){
            $article = new Article();
            $article->state = $rd->state;
            $article->name = $rd->title;
            $article->price = $rd->price * 100;
            $article->description = $rd->description;
            $article->creator_id = Auth::id();

            $article->save();

            return view('sellPage');
        }
        if(!Auth::check()){
            return abort(401);
        }
        return abort(404);
    }
}
