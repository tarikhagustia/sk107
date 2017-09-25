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
use Carbon;
use App\Models\Notification;
class OpenDemoAccountController extends Controller
{
    public function index()
    {
	  $approved = 'false';
	  $user_id = Auth::user()->id;
	  $logins = Mt4User::where('user_id',$user_id)->where('is_real','no')->get();
<<<<<<< HEAD

=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
	  if(empty($logins[0])){
		  $create = 'true';
	  }else{
		  $create = 'false';
<<<<<<< HEAD
		if($logins[0]->is_approved == 'yes'){
		  $approved = 'true';
	  	}else{

	  	}
	  }
	  
      return view('admin.account.open-demo-account',['logins'=> $logins],['create'=> $create,'approved'=> $approved]);
=======
	  }
      return view('admin.account.open-demo-account',['logins'=> $logins],['create'=> $create]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    }

	public function create_account(Request $request)
    {

		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$names = explode(" ",$name);
		$rng = str_pad(rand(0, pow(10,3)-1),3, '0', STR_PAD_LEFT);
		$password = $names[0].$rng;
		$investor_pass = 'abcd1234';
		$leverage = 100;
		$deposit = 5000;
		$host = config('settings.mt4_host');
		$port = config('settings.mt4_port');

        $data = [
            //"IP" => $request->ip(),
			"IP" => '203.173.92.102',
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
					'name' => $name,
					'email' => $email,
					'login' => $login,
					'password' => $password,
					'group' => 'demoforex',
					'is_active' => $active,
					'is_real' => $real
				  ]);
			}
			return $this->index();
		}else{

			$err = 'Terlalu banyak request, silahkan coba lagi setelah 60 detik.';

			return back()->withErrors([$err]);
		}		
    }

	public function create_account_manual()
    {
			$name = Auth::user()->name;
			$email = Auth::user()->email;
			$active = 'no';
			$real = 'no';
<<<<<<< HEAD
			$approved = 'no';
			
=======
			Mail::to(env('REGISTER_EMAIL'))->send(new DemoAccount($name, $email));
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
			Mt4User::create([
					'user_id' => Auth::user()->id,
					'login' => '',
					'password' => '',
					'name' => $name,
					'email' => $email,
					'group' => 'demoforex',
					'is_active' => $active,
<<<<<<< HEAD
					'is_real' => $real,
					'is_approved' => $approved
				  ]);
			Mail::to(env('DEFAULT'))->send(new DemoAccount($name, $email));	  
			Mail::to(env('EMAIL1'))->send(new DemoAccount($name, $email));
			Mail::to(env('EMAIL2'))->send(new DemoAccount($name, $email));
				Notification::create([
				'user_id' => '1',
				'title' => 'permintaan pembuatan demo akun a/n '.Auth::user()->name,
				'url' => route('manage.demo')
			]);
=======
					'is_real' => $real
				  ]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
			return back();

    }
}
