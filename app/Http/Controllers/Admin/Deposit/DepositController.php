<?php

namespace App\Http\Controllers\Admin\Deposit;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
class DepositController extends Controller
{
  public function index()
  {
    $data = DB::table('mt4_users')
                  ->where('user_id', Auth::user()->id)
                  ->get();
    // dd($data);
    return view('admin.deposit.deposit', ['account'=>$data]);
  }

  public function deposit(Request $r)
  {
    $cre = date("Y-m-d h:i:s");
    DB::table('deposit')->insert ([
      'account_id'=>$r->noaccount,
      'amount'=>$r->amount,
      'status'=>'pending',
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
    return redirect()->back()->with('success', 'Success Request Deposit');
  }
}
