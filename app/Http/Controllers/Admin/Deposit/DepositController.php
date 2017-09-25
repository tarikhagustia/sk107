<?php

namespace App\Http\Controllers\Admin\Deposit;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
use Carbon;
use File;
use Mail;
use App\Mail\Deposit;
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
class DepositController extends Controller
{
  public function index()
  {
    $data = DB::table('mt4_users')
                  ->where('user_id', Auth::user()->id)
<<<<<<< HEAD
				  ->where('is_real', 'yes')
				  ->where('is_active', 'yes')
                  ->first();
=======
                  ->get();
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    // dd($data);
    return view('admin.deposit.deposit', ['account'=>$data]);
  }

  public function deposit(Request $r)
  {
<<<<<<< HEAD
	$mytime = Carbon\Carbon::now();
	$mytime = $mytime->toDateTimeString();
	$mytime = str_replace('-','',$mytime);
	$mytime = str_replace(':','',$mytime);
	$mytime = str_replace(' ','',$mytime);
	if(!empty(Input::file('bukti'))){
		$image = Input::file('bukti');
		$input['imagename'] = $mytime.'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/uploads/'.Auth::user()->id);
		if(!file_exists($destinationPath)){
			$result = File::makeDirectory($destinationPath, 0775, true);
		}else{
		}
		$image->move($destinationPath, $input['imagename']);
		$fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
		$bukti = $fullpath;	
	}else{
		$bukti = $order->bukti;
	}
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    $cre = date("Y-m-d h:i:s");
    DB::table('deposit')->insert ([
      'account_id'=>$r->noaccount,
      'amount'=>$r->amount,
<<<<<<< HEAD
	  'currency'=>$r->currency,
      'status'=>'pending',
	  'bukti'=>$bukti,
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
	Mail::to(env('DEFAULT'))->send(new Deposit(Auth::user()->name,Auth::user()->email,$r->noaccount,$bukti));
	Mail::to(env('EMAIL1'))->send(new Deposit(Auth::user()->name,Auth::user()->email,$r->noaccount,$bukti));
	Mail::to(env('EMAIL2'))->send(new Deposit(Auth::user()->name,Auth::user()->email,$r->noaccount,$bukti));
=======
      'status'=>'pending',
      'created_at'=>$cre,
      'updated_at'=>$cre
    ]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    return redirect()->back()->with('success', 'Success Request Deposit');
  }
}
