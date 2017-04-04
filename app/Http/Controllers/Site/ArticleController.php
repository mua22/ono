<?php

namespace App\Http\Controllers\site;

use App\Modules\Directories\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //

    public function index($slug){

        $category = Category::findBySlug($slug);
        $articles = $category->articles()->get();
        return view('site.articles.index');

    }





}
