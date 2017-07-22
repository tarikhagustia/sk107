<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'task_title',
      'task_form_number',
      'task_action',
      'task_url',
      'task_description'
    ];

    
}
