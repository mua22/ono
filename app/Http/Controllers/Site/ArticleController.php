<?php

namespace App\Http\Controllers\site;

use App\Modules\Directories\Models\Article;
use App\Modules\Directories\Models\Category;
use App\Modules\Directories\Models\Directory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Theme;
use App\Modules\Extensions\Models\FrontTheme;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $theme = FrontTheme::where('status',1)->first();

        if($theme->name!='default'){
            Theme::setActive($theme->name);
            Theme::setLayout('layouts.site');
        }




    }

    public function index($slug)
    {
        $directories = Directory::all();
        $categories = Category::all();

        $category = Category::findBySlug($slug);
        $articles = $category->articles()->get();
        $columns = Schema::getColumnListing('articles');
        return Theme::view('site.articles.index', compact('articles', 'columns', 'category','directories','categories'));

    }


    public function detail($id)
    {
        $directories = Directory::all();
        $categories = Category::all();

        $article = Article::find($id);
        $columns = Schema::getColumnListing('articles');
        return Theme::view('site.articles.detail', compact('article', 'columns','directories','categories'));
    }


}
