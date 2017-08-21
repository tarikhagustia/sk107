<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;
use Mail;
use Zipper;
use File;
use App\Mail\RealAccount;
use App\Models\RequestAccount;
use App\Models\Mt4User;
use App\Models\UserTask;
class AccountController extends Controller
{
  public function index()
  {
    $order = Auth::user()->lastRequestAccount();
    return view('admin.account.open_account', ['order' => $order]);
  }
  public function post_request_account_real(Request $request)
  {
    $order = Auth::user()->lastRequestAccount();

    if($request->order_id != $order->id){
      return redirect()->back()->with(['error' => 'Invalid Order ID']);
    }
	$path = public_path('/pdf/'.Auth::user()->id.'/'.$order['order_number']);
	$filepath = 'pdf/'.Auth::user()->id.'/'.$order['order_number'].'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip';
	if(file_exists($filepath)){
	    File::delete($filepath);
	  }
	  $files = glob($path.'/*');
	  Zipper::make($filepath)->add($files)->close();
	  RequestAccount::where('order_number',$order['order_number'])->update(['docs' => $filepath,'status' => 'request']);
	  Mt4User::where('order_number', $order['order_number'])->update(['docs' => $filepath]);
	  Mail::to(env('OPENREAL_EMAIL'))->send(new RealAccount($order, $filepath));

    return redirect()->route('create.account.real.finish');

  }
  
  public function pengalaman_check(Request $request)
  {	
	$order = Auth::user()->lastRequestAccount();
	RequestAccount::where('id',$request->request_id)->update(['pengalaman_yes' => $request->pengalaman]);	  
	if($request->pengalaman == 'tidak'){
	  UserTask::where('request_account_id',$request->request_id)->where('task_id','3')->update(['is_active' => 'no']);
	}
	return redirect()->route('create.account.real');
  }
  
  public function request_finish(Request $request){
    return view('admin.account.create-account-finish');
  }
}
