<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guard = ['id'];
    protected $fillable = ['slug', 'name'];

    public function post()
    {
      return $this->hasMany('App\Models\Post');
    }
}
