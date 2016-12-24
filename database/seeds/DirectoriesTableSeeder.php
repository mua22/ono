<?php

use Illuminate\Database\Seeder;
use App\DirectoryType;
use App\Directory;
use App\Field;

class DirectoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eum magnam molestiae non numquam placeat quod repellat tempore vero voluptas? Adipisci architecto doloribus hic impedit numquam quaerat quod sunt voluptatem.";
    public function run()
    {
        //Insert Types
        $this->insertType('Pages');
        //$this->insertType('Product Catalog');
        $this->insertType('Blog');
        $dir = $this->insertType('Directory');

        //Insert Directories
        $this->insertDirectory('Products Catalog',$dir);
        $this->insertDirectory('Movies',$dir);
        $this->insertDirectory('Music',$dir);

    }

    /**
     * Insert Sample Directories
     * @param $title
     * @param $type
     */
    private function insertDirectory($title,$type)
    {
        $directory = new Directory();
        $directory->title = $title;
        $directory->description = $this->lorem;
        $directory->directory_type_id = $type->id;
        $directory->save();
    }

    /**
     * Insert Sample Directory Types
     * @param $title
     * @return DirectoryType
     */
    private function insertType($title)
    {
        $directory = new DirectoryType();
        $directory->title = $title;
        $directory->description = $this->lorem;
        $directory->save();
        return $directory;
    }
}


?>

