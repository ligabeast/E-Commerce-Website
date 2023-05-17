<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class APIController extends Controller
{
    function getArticles(Request $rd, string $id = ''){
        $search = $rd->search ?? '';
        $post_name = $rd->name ?? '';
        $post_state = $rd->state ?? 'Neu';
        $post_price = $rd->price ?? '';
        $post_description = $rd->description ?? '';

        if($post_name && $post_price && $post_price > 0){
            $article = new Article();
            $article->state = $post_state;
            $article->name = $post_name;
            $article->price = $post_price;
            $article->description = $post_description;
            return response()->json(['id' => $article->save()]);
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
        }else{
            return response()->json(json_encode(Article::where('name','Like','%'.$search.'%')->get()));
        }
    }
}
