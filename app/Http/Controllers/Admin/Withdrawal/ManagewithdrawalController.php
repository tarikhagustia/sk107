<?php

namespace App\Http\Controllers\Admin\Withdrawal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ManagewithdrawalController extends Controller
{
  public function index()
  {
    $status = 'pending';
    $data = DB::table('Withdrawal')
                  ->Join('mt4_users', 'Withdrawal.account_id', '=', 'mt4_users.login')
                  ->join('users', 'mt4_users.user_id', '=', 'users.id')
                  ->select('Withdrawal.id', 'mt4_users.name', 'mt4_users.email', 'account_id', 'currency', 'amount', 'status', 'bank', 'no_rek', 'nama_rek', 'Withdrawal.created_at', 'Withdrawal.updated_at')
                  ->where('status', $status)
                  ->get();
      // dd($data);
	$history = DB::table('Withdrawal')
                  ->Join('mt4_users', 'Withdrawal.account_id', '=', 'mt4_users.login')
                  ->join('users', 'mt4_users.user_id', '=', 'users.id')
                  ->select('Withdrawal.id', 'mt4_users.name', 'mt4_users.email', 'account_id', 'currency', 'amount', 'status', 'bank', 'no_rek', 'nama_rek', 'Withdrawal.created_at', 'Withdrawal.updated_at')
                  ->where('status', 'approve')
                  ->get();
    return view('admin.withdrawal.managewithdrawal', ['Withdrawal' => $data,'history' => $history ]);
  }

  public function submanagewithdrawal(Request $r)
  {
    $cre = date("Y-m-d h:i:s");
    DB::table('Withdrawal')
      ->where('id', $r->id)
      ->update(['status'=>'approve',
                'updated_at'=>$cre]);
    return redirect()->back()->with('success', 'Success Approve Withdrawal');
  }
}
