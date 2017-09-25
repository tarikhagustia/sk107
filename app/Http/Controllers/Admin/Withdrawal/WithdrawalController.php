<?php

namespace App\Http\Controllers\Admin\Withdrawal;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\RequestAccount;
use Mail;
use App\Mail\Withdrawal;
class WithdrawalController extends Controller
{
  public function index()
  {
    $data = DB::table('mt4_users')
                  ->where('user_id', Auth::user()->id)
				  ->where('is_real', 'yes')
				  ->where('is_active', 'yes')
                  ->first();
    // dd($data);
	$datas = RequestAccount::where('user_id',Auth::user()->id)->first();
    return view('admin.withdrawal.withdraw', ['account'=>$data,'datas'=>$datas]);
  }

  public function Withdrawal(Request $r)
  {
    $cre = date("Y-m-d h:i:s");
    DB::table('Withdrawal')->insert ([
      'account_id'=>$r->noaccount,
      'amount'=>$r->amount,
	  'currency'=>$r->currency,
	  'bank'=>$r->bank,
	  'no_rek'=>$r->no_rek,
	  'nama_rek'=>$r->nama_rek,
      'status'=>'pending',
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
	Mail::to(env('DEFAULT'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
	Mail::to(env('EMAIL1'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
	Mail::to(env('EMAIL2'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
      return redirect()->back()->with('success', 'Success Request Withdrawal');
  }
}
