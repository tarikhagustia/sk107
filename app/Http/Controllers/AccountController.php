<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\RealAccount;
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

    Mail::to(env('OPENREAL_MAIL'))->send(new RealAccount($order));

    return redirect()->route('create.account.real.finish');

  }
  public function request_finish(Request $request){
    return view('admin.account.create-account-finish');
  }
}
