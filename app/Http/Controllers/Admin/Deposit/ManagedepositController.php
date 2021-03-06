<?php

namespace App\Http\Controllers\Admin\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManagedepositController extends Controller
{
  public function index()
  {
    $status = 'pending';
    $data = DB::table('deposit')
                  ->Join('mt4_users', 'deposit.account_id', '=', 'mt4_users.login')
                  ->join('users', 'mt4_users.user_id', '=', 'users.id')
                  ->select('deposit.id', 'name', 'email', 'account_id', 'amount', 'status', 'deposit.created_at')
                  ->where('status', $status)
                  ->get();
      // dd($data);
    return view('admin.deposit.managedeposit', ['deposit' => $data]);
  }

  public function submanagedeposit(Request $r)
  {
    // dd($r);
    $cre = date("Y-m-d h:i:s");
    DB::table('deposit')
      ->where('id', $r->id)
      ->update(['status'=>'approve',
                'updated_at'=>$cre]);
    return redirect()->back()->with('success', 'Success Approve Deposit');
  }
}
