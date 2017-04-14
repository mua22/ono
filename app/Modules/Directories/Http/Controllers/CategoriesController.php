<?php

namespace App\Modules\Directories\Http\Controllers;

use App\Modules\Admin\Http\Controllers\AdminAppController;
use App\Modules\Directories\Models\Category;
use App\Modules\Directories\Models\Directory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends AdminAppController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page_title('Categories Manager');
        $directories = Directory::all();
        return view('directories::categories.index',compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Directory $directory)
    {
        $this->page_title('Add Category In '.$directory->title);
        return view('directories::categories.create',compact('directory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Directory $directory)
    {
        $directory->categories()->create(['title' => $request->title , 'description' => $request->description]);
        return redirect('admin/categories/'.$directory->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->page_title('Categories Manager');
        $directory = Directory::findOrFail($id);
        $directories = Directory::all();
        return view('directories::categories.show', compact('directory','directories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->page_title('Editing '.$category->title);
        return view('directories::categories.edit', compact('category'));

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
        $category = Category::findOrFail($id);
        $category->updateCategory($request);
        return redirect('admin/categories');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back();
    }
}
