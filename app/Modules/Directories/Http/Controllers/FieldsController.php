<?php

namespace App\Modules\Directories\Http\Controllers;

use App\Modules\Directories\Models\FieldOption;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modules\Admin\Http\Controllers\AdminAppController;
use App\Modules\Directories\Models\Directory;
use App\Modules\Directories\Models\DirectoryField;
use App\Modules\Directories\Models\Field;
use Illuminate\Support\Facades\DB;


class FieldsController extends AdminAppController
{

    public function index()
    {
        $this->page_title('Fields Manager');
        
        $directories = Directory::all();
        //$fields = Field::paginate(10);
        return view('directories::fields.index')->with(compact('directories'));
    }


    public function create(Directory $directory, Request $request)
    {
        //
        $this->page_title('Add Field in '.$directory->title);
        $ftype = $request->ftype;
        return view('directories::fields.create',compact('directory','ftype'));


    }

    public function select(Directory $directory)
    {
        //
        $this->page_title('Select Field type ');
        return view('directories::fields.select',compact('directory'));


    }


    public function store(Request $request,Directory $directory)
    {
        //

            $field = $directory->fields()->create(['title' => $request->title, 'description' => $request->description, 'ftype' => $request->ftype]);
            flash('New Field Created')->success();
            for ($i=0 ; $i<sizeof($request->sel); $i++)
        {
            FieldOption::create(['field_id'=>$field->id , 'option' => $request->sel[$i]]);
        }
            return redirect('admin/fields/'.$directory->id);
    }


    public function show($id)
    {
        //
        $directory=Directory::find($id);
        $directories = Directory::all();
        $this->page_title('Fields Manager');
        $dir = $id;
        return view('directories::fields.show',compact('directory','directories','dir'));
        
    }


    public function editing($id, $dir)
    {
        //
        $field = Field::findOrFail($id);
        $this->page_title('Editing '.$field->title);
        return view('directories::fields.edit',compact('field','dir'));
    }


    public function update(Request $request, Field $field)
    {
        //
        if(isset($field)){
            $field->title=$request->title;
            $field->description=$request->description;
            $field->save();
            flash('Field Updated')->warning();
            return redirect('admin/fields/'.$request->dir);

        }

    }


    public function destroy($field_id,$directory_id)
    {

        $directory_field=DirectoryField::where('field_id',$field_id)->where('directory_id', $directory_id)->delete();
        flash('Field Deleted')->error();
        return redirect('admin/fields/'.$directory_id);
    }
}
