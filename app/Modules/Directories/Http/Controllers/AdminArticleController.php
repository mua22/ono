<?php

namespace App\Modules\Directories\Http\Controllers;

use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\ArticleCategory;
use App\Modules\Directories\Models\Category;
use App\Modules\Admin\Http\Controllers\AdminAppController;
use App\Modules\Directories\Models\Field;
use Illuminate\Http\Request;
use App\Modules\Directories\Models\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class AdminArticleController extends AdminAppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        $article_categories =ArticleCategory::all();
        return view('directories::articles.index',compact('articles','article_categories','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectDirectory()
    {
        $this->page_title('Select Directory');
        $directories = Directory::all();
        return view('directories::articles.create',compact('directories'));
    }


    public function create(Request $request)
    {
        $this->page_title('Create Article');
        $directory =Directory::where('title', $request->dir)->first();
        $fields = Field::all();
        $dir_fields = $directory->fields()->get();
        return view('directories::articles.create',compact('dir_fields','fields'));
    }



    public function store(Request $request)
    {
        dd('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(Article $id)
    {
        return $id;

    }


    public function update(Request $request)
    {
        dd('update');
    }


    public function destroy($id)
    {
        $deletedRows = DB::table('article_category')->where('article_id', $id)->delete();
        DB::table('articles')->where('id',$id)->delete();
        return back();
    }
}
