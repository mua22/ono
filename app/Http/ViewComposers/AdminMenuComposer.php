<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 1/5/2017
 * Time: 11:00 PM
 */

namespace App\Http\ViewComposers;


use App\Modules\Directories\Models\Directory;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminMenuComposer
{
    public function compose(View $view)
    {
        $setting_prefixes = DB::table('settings')->select('prefix')->distinct()->get();
        $directories_for_menu = Directory::all();
        $view->with(compact('setting_prefixes','directories_for_menu'));
    }
}