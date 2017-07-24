<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $fillable = [
      'account_name', 'account_type', 'account_login', 'account_password', 'is_active', 'account_host'
    ];
}
