<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Carbon;
use Mail;
use App\Mail\DemoAccountActivated;
use App\Models\Task;
use App\Models\UserTask;
use App\Models\RequestData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Mt4User;
use App\User;
use App\Models\RequestAccount;
use App\Models\AccountType;

class AdminController extends Controller
{
    public function index()
    {

	  $demos = Mt4User::where('is_active','no')->where('is_real','no')->get();
      return view('admin.account.admin',['demos'=> $demos]);
    }

	public function update(Request $request)
    {
	  if(empty($request->login) || empty($request->password)){
		  $err = 'The Login and Password required!';
		  return back()->withErrors($err);
	  }else{
		Mt4User::where('id', $request->id)->update(['is_active' => 'yes','login' => $request->login,'password' => $request->password]);
		$demos = Mt4User::where('id',$request->id)->first();
		$name = $demos->name;
		$login = $request->login;
		$password = $request->password;
		Mail::to($demos->email)->send(new DemoAccountActivated($name, $login, $password));
		return back();
	  }
    }
	
	public function approve_demo()
    {
	  $demos = Mt4User::where('is_approved','no')->get();
      return view('admin.account.approve-demo',['demos'=> $demos]);
    }
	
	public function list_demo()
    {
	  $demos = Mt4User::where('is_real','no')->get();
      return view('admin.account.demo-account-list',['demos'=> $demos]);
    }
	
	public function list_real()
    {
	  $reals = Mt4User::where('is_real','yes')->get();
	  $datas = RequestAccount::where('status','approved')->get();
      return view('admin.account.real-account-list',['reals'=> $reals]);
    }
	
	public function approve_demo_post(Request $request)
    {
		Mt4User::where('id', $request->id)->update(['is_approved' => 'yes']);
		return back();
    }
	
    public function manage_real_account($id = false){

      if(!$id):
        $accounts = RequestAccount::orderBy('updated_at')->paginate();
        return view('admin.account.manage-real-account', ['accounts' => $accounts]);
      else:
        $accountType = accountType::all();
        $account = RequestAccount::find($id);
        return view('admin.account.manage-real-account-detail', ['order' => $account, 'accountType' => $accountType]);
      endif;
    }
    public function manage_real_account_post(Request $request){

      if($request->account_status == "approved"){
          $this->validate($request, [
            'account_status' => 'required',
            'login_number' => 'required|numeric',
            'login_password' => 'required'
          ]);

          $sql = RequestAccount::find($request->request_id);
          $sql->account_number = $request->login_number;
          $sql->status = "approved";
          $sql->account_password = $request->login_password;
          $sql->save();
		  
		  
		  $data = RequestAccount::where('id',$request->request_id)->first();
		  $user = User::where('id',$data['user_id'])->first();
		  Mt4User::create([
            'user_id' => $data['user_id'],
            'order_number' => $data['order_number'],
            'login' => $request->login_number,
			'password' => $request->login_password,
			'email' => $user['email'],
			'name' => $data['nama'],
			'is_real' => 'yes',
			'is_active' => 'yes',
			'docs' => $data['docs']
        ]);
		
		$requests = RequestAccount::create([
          'user_id' => $data['user_id'],
          'account_type_id' => 1,
          'order_number' => Carbon::now()->timestamp,
          'account' => null,
          'status' => 'filling'
        ]);
		UserTask::where('request_account_id',$request->request_id)->delete();
        $tasks = Task::all();
        foreach($tasks as $row){
          UserTask::create([
            'user_id' => $data['user_id'],
            'request_account_id' => $requests->id,
            'task_id' => $row->id,
            'status' => ($row->task_form_number == '107.PBK.01') ? "current" : "disabled",
          ]);
        }
          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }

      if($request->account_status == "rejected"){
          $this->validate($request, [
            'account_status' => 'required',
            'reason' => 'required'
          ]);

          $sql = RequestAccount::find($request->request_id);
          $sql->status = "rejected";
          $sql->rejected_reason = $request->reason;
          $sql->save();

          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }

    }
}
