<?php

use Illuminate\Database\Seeder;

class FrontThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertTheme('default',1);
        $this->insertTheme('blue',0);
        $this->insertTheme('orange',0);

    }

    public function insertTheme($name,$status)
    {
        $theme = new \App\Modules\Extensions\Models\FrontTheme();
        $theme->name = $name;
        $theme->status = $status;
        $theme->save();
    }



}
?>

