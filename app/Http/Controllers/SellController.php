<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SellController extends Controller
{
    function index(Request $rd){
        return view('sellPage');
    }

    function listArticleToSell(Request $rd){
        $categorys = ArticleCategory::all('name');
        return view('listItemCategory',compact('categorys'));
    }

    function listArticleInCategory(Request $rd){
        if(ArticleCategory::where('name','=',$rd->category)->first()) { //exists
            return view('listItem');
        }
        return view('listItemNotFound');
    }
}
