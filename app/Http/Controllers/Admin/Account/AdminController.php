<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Mail;
use App\Mail\DemoAccountActivated;
use App\Models\UserTask;
use App\Models\RequestData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Mt4User;

class AdminController extends Controller
{
    public function index()
    {
	  	
	  $demos = Mt4User::where('is_active','no')->where('is_real','no')->get();
      return view('admin.account.admin',['demos'=> $demos]);
    }
	
	public function update(Request $request)
    {
	  if(empty($request->login) || empty($request->password)){
		  $err = 'The Login and Password required!';
		  return back()->withErrors($err);
	  }else{
		Mt4User::where('id', $request->id)->update(['is_active' => 'yes','login' => $request->login,'password' => $request->password]);
		$demos = Mt4User::where('id',$request->id)->first();
		$name = $demos->name;
		$login = $request->login;
		$password = $request->password;
		Mail::to($demos->email)->send(new DemoAccountActivated($name, $login, $password));  
		return back();
	  }
    }
}
