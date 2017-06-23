<?php

namespace App\Http\Controllers;


use App\Modules\Directories\Models\Article;
use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\Category;
use Illuminate\Http\Request;
use App\Modules\Extensions\Models\FrontTheme;
use Illuminate\Support\Facades\DB;
use Theme;
class SiteController extends Controller

{
    public function __construct() {


        $theme = FrontTheme::where('status',1)->first();

        if($theme->name!='default'){
            Theme::setActive($theme->name);
            Theme::setLayout('layouts.site');
        }
    }
    public function home()
    {

        $categories = DB::table('categories')->orderBy('id', 'desc')->get();
        $articles = Article::orderBy('id', 'desc')->take(4)->get();
        $directories = Directory::all();
        return Theme::view('dashboard.index',compact('articles','categories','directories'));
    }

    public function login() {

        $categories = Category::all();
        return Theme::view('admin.login',compact('categories'));

    }
}
