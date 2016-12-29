<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends AdminAppController
{
    public function __invoke()
    {
        $this->page_title('Ono Dashboard');
        return view('admin.dashboard.index');
    }
}
