<?php

namespace App\Http\Controllers\Site;


use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\Category;
use App\Modules\Directories\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Extensions\Models\FrontTheme;
use Theme;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCategories($directory)
    {
        $theme = FrontTheme::where('status',1)->first();

        if($theme->name!='default'){
            Theme::setActive($theme->name);
            Theme::setLayout('layouts.site');
        }

        $directory = Directory::findBySlug($directory);
        $categories = $directory->categories()->get();
        $articles = ArticleCategory::all();
        $directories = Directory::all();
        return Theme::view('site.directory.show')->with(compact('directories','categories','directory','articles'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
