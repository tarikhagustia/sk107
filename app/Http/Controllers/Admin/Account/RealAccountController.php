<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use Zipper;
use Carbon;
use PDF;
use File;
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
	  $data = Auth::user()->approvedRequestAccount();
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/'.$request->order.'/PBK07.pdf'), $output);  
	  }
	  $path = public_path('/pdf/'.Auth::user()->id.'/'.$request->order);

	  $filepath = 'pdf/'.Auth::user()->id.'/'.$request->order.'/RequestAccount-'.$data['nama'].'-'.$request->order.'.zip';
	  if(file_exists($filepath)){
	    File::delete($filepath);
	  }
	  $files = glob($path.'/*');
	  Zipper::make($filepath)->add($files)->close();
	  RequestAccount::where('order_number', $request->order)->update(['agreement' => 'ya','docs' => $filepath]);
	  Mt4User::where('order_number', $request->order)->update(['docs' => $filepath]);
	  return back();
	}
}
