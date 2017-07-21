<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestAccount extends Model
{
    protected $fillable = [
      'user_id', 'account_number', 'status'
    ];
}
