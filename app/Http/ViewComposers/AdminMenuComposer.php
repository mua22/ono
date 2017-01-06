<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 1/5/2017
 * Time: 11:00 PM
 */

namespace App\Http\ViewComposers;


use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminMenuComposer
{
    public function compose(View $view)
    {
        $setting_prefixes = DB::table('settings')->select('prefix')->distinct()->get();
        $view->with(compact('setting_prefixes'));
    }
}