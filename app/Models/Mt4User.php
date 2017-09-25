<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mt4User extends Model
{
    //
	protected $fillable = [
      'user_id', 'login', 'password', 'group','is_active','is_real','name','email','order_number','docs'
    ];
}
