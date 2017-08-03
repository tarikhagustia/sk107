<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use App\Mail\DemoAccount;
use App\User;
use App\Models\Mt4User;
use App\Models\Mt4Setting;
class OpenDemoAccountController extends Controller
{
    public function index()
    {
	  $user_id = Auth::user()->id;
	  $reals = Mt4User::where('user_id',$user_id)->where('is_real','yes')->get();
      return view('admin.account.real-account',['reals'=> $reals]);
    }
}
