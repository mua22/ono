<?php

namespace App\Modules\Directories\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Http\Request;

class Category extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function directory()
    {
        return $this->belongsTo(Directory::class);
    }


    public function updateCategory(Request $request)
    {
        $this->title = $request->title;
        $this->description = $request->description;
        $this->save();
    }












}
