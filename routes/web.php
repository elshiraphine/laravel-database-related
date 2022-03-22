<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/article', function () {
//     $articles = [
//         [
//             "title" => "Visit Finland",
//             "slug" => "visit-finland",
//             "author" => "Visit Eur",
//             "body" => "Come and visit"
//         ],
//         [
//             "title" => "Visit Norway",
//             "slug" => "visit-norway",
//             "author" => "Visit Eur",
//             "body" => "Come and visit"

//         ]
//     ];
//     return view ('article', [
//         "name" => "Elshe Erviana Angely",
//         "email" => "elshemile16@gmail.com",
//         "articles" => $articles
//     ]);
// });

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class,  'content']);

Route::get('/categories', function(){
    return view('article', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'articles' => $category->article,
        'category' => $category->name
    ]);
});