<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class RequestAccount extends Model
{
    protected $fillable = [
      'user_id', 'account_number', 'status', 'order_number'
    ];
}
