<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Mail;
use App\Mail\DemoAccount;
use App\User;
use App\Models\Mt4User;
use App\Models\Mt4Setting;
class OpenDemoAccountController extends Controller
{
    public function index()
    {
	  $user_id = Auth::user()->id;
	  $logins = Mt4User::where('user_id',$user_id)->get();
	  if(!empty($logins)){
		  $create = 'false';
	  }else{
		  $create = 'true';
	  }

      return view('admin.account.open-demo-account',['logins'=> $logins],['create'=> $create]);
    }

	public function create_account(Request $request)
    {

		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$names = explode(" ",$name);
		$rng = str_pad(rand(0, pow(10,3)-1),3, '0', STR_PAD_LEFT);
		$password = $names[0].$rng;
		$investor_pass = 'abc123';
		$leverage = 100;
		$deposit = 5000;
		$host = config('settings.mt4_host');
		$port = config('settings.mt4_port');

        $data = [
            "IP" => $request->ip(),
            "GROUP" => 1,
            "NAME" => $name,
            "PASSWORD"  => $password,
            "INVESTOR"  => $investor_pass,
            "EMAIL"     => $email,
            "COUNTRY"   => $request->country,
            "STATE"     => $request->state,
            "CITY"      => $request->city,
            "ADDRESS"   => $request->address,
            "COMMENT"   => $request->comment,
            "PHONE"     => $request->phone,
            "PHONE_PASSWORD"     => $request->phone_password,
            "STATUS"    => "active",
            "ZIPCODE"    => $request->zip_code,
            "ID"    => $request->id,
            "LEVERAGE"    => (int)$leverage,
            "AGENT"    => $request->agent,
            "SEND_REPORTS"    => $request->send_report,
            "DEPOSIT"    => $deposit,
        ];
        $run = app('MetaService')->setHost($host, $port)->createAccount($data);
		if($run['status'] == true){
			$login = '';
			foreach($run['result'] as $result){
					$login = $result;
					$active = 'yes';
					$real = 'no';
					Mt4User::create([
					'user_id' => Auth::user()->id,
					'login' => $login,
					'password' => $password,
					'group' => 'demoforex',
					'is_active' => $active,
					'is_real' => $real
				  ]);
			}
			return $this->index();
		}else{
			$user_id = Auth::user()->id;
			$logins = Mt4User::where('user_id',$user_id)->get();
			if($logins){
				$create = 'false';
			}else{
				$create = 'true';
			}
			$err = 'Terlalu banyak request, silahkan coba lagi setelah 60 detik.';
			return view('admin.account.open-demo-account',['logins'=> $logins],['create'=> $create]);
		}
    }

	public function create_account_manual(Request $request)
    {
			$user_id = Auth::user()->id;
			$name = Auth::user()->name;
			$email = Auth::user()->email;
			$active = 'no';
			$real = 'no';
			Mail::to(env('REGISTER_EMAIL'))->send(new DemoAccount($name, $email));
			$logins = Mt4User::where('user_id',$user_id)->get();
			if($logins){
				$create = 'false';
			}else{
				$create = 'true';
			}
			Mt4User::create([
					'user_id' => Auth::user()->id,
					'login' => '',
					'password' => '',
					'group' => 'demoforex',
					'is_active' => $active,
					'is_real' => $real
				  ]);
			return view('admin.account.open-demo-account',['logins'=> $logins],['create'=> $create]);

    }
}
