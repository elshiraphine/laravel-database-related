<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            "title" => "Article Page",
            "name" => "Elshe Erviana Angely",
            "email" => "elshemile16@gmail.com",
            "articles" => Article::all()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article
        ]);
    }
}
