<?php

namespace App\Http\Controllers\Admin\Withdrawal;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
<<<<<<< HEAD
use App\Models\RequestAccount;
use Mail;
use App\Mail\Withdrawal;
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
class WithdrawalController extends Controller
{
  public function index()
  {
    $data = DB::table('mt4_users')
                  ->where('user_id', Auth::user()->id)
<<<<<<< HEAD
				  ->where('is_real', 'yes')
				  ->where('is_active', 'yes')
                  ->first();
    // dd($data);
	$datas = RequestAccount::where('user_id',Auth::user()->id)->first();
    return view('admin.withdrawal.withdraw', ['account'=>$data,'datas'=>$datas]);
=======
                  ->get();
    // dd($data);
    return view('admin.Withdrawal.Withdraw', ['account'=>$data]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
  }

  public function Withdrawal(Request $r)
  {
    $cre = date("Y-m-d h:i:s");
    DB::table('Withdrawal')->insert ([
      'account_id'=>$r->noaccount,
      'amount'=>$r->amount,
<<<<<<< HEAD
	  'currency'=>$r->currency,
	  'bank'=>$r->bank,
	  'no_rek'=>$r->no_rek,
	  'nama_rek'=>$r->nama_rek,
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
      'status'=>'pending',
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
<<<<<<< HEAD
	Mail::to(env('DEFAULT'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
	Mail::to(env('EMAIL1'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
	Mail::to(env('EMAIL2'))->send(new Withdrawal(Auth::user()->name,Auth::user()->email,$r->noaccount,$r->bank,$r->no_rek,$r->nama_rek));
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
      return redirect()->back()->with('success', 'Success Request Withdrawal');
  }
}
