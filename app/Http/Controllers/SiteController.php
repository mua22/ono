<?php

namespace App\Http\Controllers;

use App\Directory;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __invoke()
    {
        $directories = Directory::all();
        return view('dashboard.index')->with(compact('directories'));
    }
}
