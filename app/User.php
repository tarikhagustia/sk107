<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'phone', 'sex'
	  ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks()
    {
      return $this->hasMany('App\Models\UserTask')->where('is_active','yes')->orderBy('task_id', 'asc');
    }

    public function account_request()
    {
      return $this->hasMany('App\Models\RequestAccount');
    }
    public function lastRequestAccount(){
      return $this->hasMany('App\Models\RequestAccount')->where('status', 'filling')->first();
    }
	public function approvedRequestAccount(){
      return $this->hasMany('App\Models\RequestAccount')->where('status', 'approved')->first();
    }
}
