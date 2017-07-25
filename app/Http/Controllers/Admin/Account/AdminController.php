<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Mail;
use App\Mail\RealAccount;
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
	  Mt4User::where('id', $request->id)->update(['is_active' => 'yes','login' => $request->login,'password' => $request->password]);
	  return back();
    }
}
