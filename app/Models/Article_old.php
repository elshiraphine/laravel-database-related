<?php

namespace App\Models;

use Faker\Provider\Lorem;

class Article
{
    private static $articles = [
        [
            "title" => "Visit Finland",
            "slug" => "visit-finland",
            "author" => "Visit Eur",
            "body" => "Come and visit"
        ],
        [
            "title" => "Visit Norway",
            "slug" => "visit-norway",
            "author" => "Visit Eur",
            "body" => "Come and visit"

        ]
    ];

    public static function all(){
        return collect(self::$articles);
    }

    public static function find($slug){
        $articles = static::all();
        // $new_post = [];
        // foreach ($articles as $article){
        //     if($article["slug"] === $slug){
        //         $new_post = $article;
        //     }
        // }
        return $articles->firstWhere('slug', $slug);
    }
}
