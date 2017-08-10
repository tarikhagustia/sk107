<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Zipper;
use Carbon;
use PDF;
use App\Mail\DemoAccount;
use App\User;
use App\Models\Mt4User;
use App\Models\Mt4Setting;
use App\Models\RequestAccount;
class RealAccountController extends Controller
{
    public function index()
    {
	  $user_id = Auth::user()->id;
	  $email = Auth::user()->email;
	  $reals = RequestAccount::where('user_id',$user_id)->where('status','approved')->get();
      return view('admin.account.real-account',['reals'=> $reals,'email'=>$email]);
    }
	
	public function agreement_post(Request $request)
	{
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();
	  dd($data);
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number']);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK07.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK07.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$data['order_number'].'/PBK07.pdf'), $output);  
	  }
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$order['order_number']);
	  $files = glob($path.'/*');
	  Zipper::make($path.'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip')->add($files)->close();
	  $zippath = $path.'/RequestAccount-'.$order['nama'].'-'.$order['order_number'].'.zip';
	  RequestAccount::where('order_number', $data['order_number'])->update(['agreement' => 'ya']);
	  return back();
	}
}
