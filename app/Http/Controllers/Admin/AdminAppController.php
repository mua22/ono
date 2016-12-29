<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAppController extends Controller
{
    //private $title = '';

    protected function page_title($title = '')
    {
     //$this->title = $title;
        view()->share('page_title', $title);
    }
}
