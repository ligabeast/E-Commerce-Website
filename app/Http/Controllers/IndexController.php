<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use const http\Client\Curl\Versions\ARES;

class IndexController extends Controller
{
    function index(Request $r){
        return view('homepage');
    }
    function index_vue(Request $r){
        return view('homepage_vue');
    }
    function cookies(Request $r){
        return view('cookies');
    }
    function search(Request $rd){
        $articles = null;
        $selectedCategory = $rd->category != 'Alle' ?? false;
        $selectedName = !empty($rd->name) ?? false;

        if($selectedName && $selectedCategory){
            $id = ArticleCategory::where('name',$rd->category);
            $articles = Article::join('article_has_category', 'articles.id','=','article_has_category.article_id')
                ->get()
                ->where('article_has_category.article_category_id',$id)
                ->where('name','like','%'.$rd->name.'%');
        }
        else if(!($selectedName || $selectedCategory)){
            $articles = Article::all();
        }
        else if (!$selectedName){
            $category_id = ArticleCategory::whereName($rd->category)->first()->id;
            $articles = Article::join('article_has_category', 'articles.id','=','article_has_category.article_id')
                ->where('article_has_category.article_category_id','=',$category_id)
                ->get();
        }
        else if (!$selectedCategory){
            $articles = Article::where('name','like','%'.$rd->name.'%')
                ->get();
        }
        return view('search',['articles' => $articles]);
    }
    function search_vue(Request $rd){
        return view('search_vue',['articles' => Article::all()]);
    }
}
