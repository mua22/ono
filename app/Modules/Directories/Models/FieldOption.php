<?php

namespace App\Modules\Directories\Models;

use Illuminate\Database\Eloquent\Model;

class FieldOption extends Model
{

    protected $fillable = ['field_id','option'];
    public $timestamps = false;

}
