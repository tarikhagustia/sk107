<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use Zipper;
use App\Mail\RealAccount;
use App\Models\RequestAccount;
use App\Models\Mt4User;
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
	$files = glob($path.'/*');
	  Zipper::make($path.'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip')->add($files)->close();
	  $zippath = $path.'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip';
	  $filepath = 'pdf/'.Auth::user()->id.'/'.$order['order_number'].'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip';
	  RequestAccount::where('order_number',$order['order_number'])->update(['docs' => $filepath]);
	  Mt4User::where('order_number', $order['order_number'])->update(['docs' => $filepath]);
	  Mail::to(env('OPENREAL_EMAIL'))->send(new RealAccount($order, $zippath));

    return redirect()->route('create.account.real.finish');

  }
  public function request_finish(Request $request){
    return view('admin.account.create-account-finish');
  }
}
