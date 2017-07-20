<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mt4Setting extends Model
{
    //
	protected $fillable = [
      'client', 'ip', 'port', 'master_password', 'login', 'password'
    ];
}
