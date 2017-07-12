<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class OpenDemoAccountController extends Controller
{
    public function index()
    {
		
      return view('admin.account.open-demo-account');
    }
	
	public function create_account()
    {
		$userid = Auth::id();
		
		$user = User::where('id',$userid)->get();
		$name = $user->name;
		$email = $user->email;
		$names = explode(" ",$name);
		$rng = str_pad(rand(0, pow(10,3)-1),3, '0', STR_PAD_LEFT);
		$password = $names[0].$rng;
		$leverage = 100;
		$deposit = 1000;
		$host = config('settings.mt4_host');
		$port = config('settings.mt4_port');
		
        $data = [
            "IP" => $request->ip(),
            "GROUP" => 1,
            "NAME" => $name,
            "PASSWORD"  => $password,
            "INVESTOR"  => '',
            "EMAIL"     => $email,
            "COUNTRY"   => '',
            "STATE"     => '',
            "CITY"      => '',
            "ADDRESS"   => '',
            "COMMENT"   => '',
            "PHONE"     => '',
            "PHONE_PASSWORD"     => '',
            "STATUS"    => "active",
            "ZIPCODE"    => '',
            "ID"    => '',
            "LEVERAGE"    => $leverage,
            "AGENT"    => '',
            "SEND_REPORTS"    => '',
            "DEPOSIT"    => $deposit,
        ];
        $run = app('MetaService')->setHost($host, $port)->createAccount($data);
        return response()->json($run);
    }
}
