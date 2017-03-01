<?php

namespace App\Modules\Directories\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modules\Admin\Http\Controllers\AdminAppController;
use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\DirectoryField;
use App\Modules\Directories\Models\Field;
use Illuminate\Support\Facades\DB;


class FieldsController extends AdminAppController
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $this->page_title('Fields Manager');
        
        $directories = Directory::all();
        //$fields = Field::paginate(10);
        return view('directories::fields.index')->with(compact('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Directory $directory)
    {
        //
        

    dd('create function');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Directory $directory)
    {
        //

        $directory->fields()->create(['title' => $request->title, 'description' => $request->description]);
        return redirect('admin/fields/'.$directory->id);
        


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
        $directory=Directory::find($id);
        $directories = Directory::all();
        return view('directories::fields.show',compact('directory','directories'));
        
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
        $field = Field::findOrFail($id);
        $this->page_title('Editing '.$field->title);
        return view('directories::fields.edit')->with(compact('field'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        //
        if(isset($field)){
            $field->title=$request->title;
            $field->description=$request->description;
            $field->save();
            return back();

        }

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
