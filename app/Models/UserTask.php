<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $fillable = [
      'user_id', 'task_id', 'status', 'request_account_id'
    ];

    public function task(){
      return $this->belongsTo('App\Models\Task');
    }
}
