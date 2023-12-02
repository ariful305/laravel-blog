<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =['created_at','updated_at'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
