<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleHasCategory;
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
        if(!Auth::check()){
            return abort(401);
        }
        if(ArticleCategory::where('name','=',$rd->category)->first()) { //exists
            return view('listItem',['category' => $rd->category]);
        }
        return view('listItemNotFound');
    }

    function postArticle(Request $rd){
        if($rd->state && ($rd->state == 'Gebraucht' || $rd->state == 'Neu') && $rd->title && $rd->category && ArticleCategory::whereName($rd->category)->first() && $rd->description && $rd->price && $rd->price > 0 && Auth::check()){
            $article = new Article();
            $article->state = $rd->state;
            $article->name = $rd->title;
            $article->price = $rd->price * 100;
            $article->description = $rd->description;
            $article->creator_id = Auth::id();

            $article->save();
            $category_id = ArticleCategory::whereName($rd->category)->first()->id;

            $article_has_category = new ArticleHasCategory();
            $article_has_category->article_id = $article->id;
            $article_has_category->article_category_id = $category_id;
            $article_has_category->save();

            return view('sellPage',['quantityActive' => Article::whereCreatorId(Auth::id())->count()]);
        }
        if(!Auth::check()){
            return abort(401);
        }
        return abort(404);
    }
}
