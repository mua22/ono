<?php

namespace App\Modules\Directories\Http\Controllers;

use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\ArticleCategory;
use App\Modules\Directories\Models\Category;
use App\Modules\Admin\Http\Controllers\AdminAppController;
use App\Modules\Directories\Models\Field;

use App\Modules\Directories\Models\FieldOption;
use Illuminate\Http\Request;
use App\Modules\Directories\Models\Article;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Image;


class AdminArticleController extends AdminAppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page_title('Browse All Articles');
        $articles = Article::paginate(8);
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
        return view('directories::articles.select',compact('directories'));
    }


    public function create(Request $request)
    {

        $this->page_title('Create Article');
        $directory =Directory::where('title', $request->dir)->first();
        $dir_fields = $directory->fields()->get();
        $directory = $directory->id;
        $field_options = FieldOption::all();
        return view('directories::articles.create',compact('dir_fields','directory','field_options'));
    }



    public function store(Request $request)
    {

        $directory = Directory::find($request->directory_id);
        $fields = $directory->fields()->get();
        $article = new Article();
        $article->title = $request->title;
        $article->summary = $request->summary;
        $article->description = $request->description;
        $article->directory_id = $request->directory_id;
        foreach ($fields as $field) {

                $field = 'f-'.$field->slug;
                $article->$field = $request->$field;

        }

        if($request->hasFile('image')){

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(800,400)->save($location);
            $article->image = $filename;
        }

        $article->save();
        flash('New Article Created')->success();
        return redirect('admin/articles');


    }


    public function show($id)
    {
        //
    }


    public function deleteLinkedCategories(Request $request,$article_id,$category_id)
    {
        ArticleCategory::where('article_id',$article_id)->where('category_id',$category_id)->delete();
        flash('Category UnLinked')->error();
        return redirect()->route('articles.index');


    }


    public function edit(Article $article)
    {

        $article_categories =  $article->categories()->get();
        $directory = Directory::find($article->directory_id);
        $categories = Category::all();
        $dir_fields = $directory->fields()->get();
        $field_options = FieldOption::all();
        return view('directories::articles.edit',compact('categories','article_categories','directory','dir_fields','article','field_options'));

    }


    public function update(Request $request,Article $article)
    {
       if (isset($request->categories)){
            $categories = Category::whereIn('title',$request->categories)->get();
           foreach ($categories as $category){
               $article_category = new ArticleCategory();
               $article_category->article_id = $article->id;
               $article_category->category_id = $category->id;
               $article_category->save();

           }
           flash('Article Updated')->warning();
           return redirect()->route('articles.index');
       }

       elseif (isset($request->submit)){

           $directory = Directory::find($article->directory_id);
           $fields = $directory->fields()->get();
           $article->title = $request->title;
           $article->summary = $request->summary;
           $article->description = $request->description;
           foreach ($fields as $field) {
               $field = 'f-'.$field->slug;
               $article->$field = $request->$field;

           }
           if($request->hasFile('image')){

               $image = $request->file('image');
               $filename = time() . '.' . $image->getClientOriginalExtension();
               $location = public_path('images/'.$filename);
               Image::make($image)->resize(800,400)->save($location);
               $article->image = $filename;
           }
           $article->save();
           flash('Article Updated')->warning();
           return redirect()->route('articles.index');

       }



    }


    public function destroy($id)
    {
        $deletedRows = DB::table('article_category')->where('article_id', $id)->delete();
        DB::table('articles')->where('id',$id)->delete();
        flash('Article Deleted')->error();
        return back();
    }
}
