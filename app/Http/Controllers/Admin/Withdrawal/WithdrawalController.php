<?php

namespace App\Http\Controllers\Admin\Withdrawal;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
class WithdrawalController extends Controller
{
  public function index()
  {
    $data = DB::table('mt4_users')
                  ->where('user_id', Auth::user()->id)
                  ->get();
    // dd($data);
    return view('admin.Withdrawal.Withdraw', ['account'=>$data]);
  }

  public function Withdrawal(Request $r)
  {
    $cre = date("Y-m-d h:i:s");
    DB::table('Withdrawal')->insert ([
      'account_id'=>$r->noaccount,
      'amount'=>$r->amount,
      'status'=>'pending',
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
      return redirect()->back()->with('success', 'Success Request Withdrawal');
  }
}
