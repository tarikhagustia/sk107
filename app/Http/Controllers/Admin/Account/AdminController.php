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
use App\Models\RequestUpdateAccount;
use App\Models\Notification;

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
		Notification::create([
            'user_id' => $demos->user_id,
            'title' => 'pembuatan demo akun anda berhasil',
            'url' => route('demo.account')
        ]);
		return redirect()->route('manage.demo');
	  }
    }
	
	public function approve_demo()
    {
	  $demos = Mt4User::where('is_approved','no')->where('is_active','yes')->get();
      return view('admin.account.approve-demo',['demos'=> $demos]);
    }
	
	public function list_demo()
    {
	  $demos = Mt4User::where('is_real','no')->where('is_active','yes')->get();
      return view('admin.account.demo-account-list',['demos'=> $demos]);
    }
	
	public function list_real()
    {
	  $reals = Mt4User::where('is_real','yes')->where('is_active','yes')->get();
      return view('admin.account.real-account-list',['reals'=> $reals]);
    }
	
	public function approve_update()
    {
	  $datas = RequestUpdateAccount::where('status','pending')->get();
      return view('admin.account.approve-update-account',['datas'=> $datas]);
    }
	
	public function approve_update_detail($id){
        $accountType = accountType::all();
        $account = RequestUpdateAccount::find($id);
        return view('admin.account.admin-approve-update-account-detail', ['order' => $account, 'accountType' => $accountType]);
    }
	
	public function approve_update_post(Request $request)
    {
	  $data = RequestUpdateAccount::where('id',$request->request_id)->first();	
	  if($request->account_status == "approved"){
		  RequestAccount::where('order_number', $data->order_number)->update([
            'user_id' => Auth::user()->id,
			      'account_type_id' => 1,
            'nama' => $data->nama,
            'tempat_lahir' => $data->tempat_lahir,
      			'dob' => $data->dob,
      			'alamat' => $data->alamat,
      			'tipe_id' => $data->tipe_id,
      			'no_id' => $data->no_id,
      			'phone_number' => $data->phone_number,
      			'pengalaman' => $data->pengalaman,
      			'tujuan' => $data->tujuan,
      			'npwp' => $data->npwp,
      			'jenis_kelamin' => $data->jenis_kelamin,
      			'status_perkawinan' => $data->status_perkawinan,
      			'nama_ibu' => $data->ibu,
      			'kode_pos' => $data->postcode,
      			'status_rumah' => $data->status_rumah,
      			'telp_rumah' => $data->telpon_rumah,
      			'keluarga_kbi' => $data->keluarga_kbi,
      			'pailit' => $data->pailit,
      			'nama_darurat' => $data->nama_darurat,
      			'telp_darurat' => $data->telp_darurat,
      			'hubungan' => $data->hubungan,
      			'alamat_darurat' => $data->alamat_darurat,
      			'pekerjaan' => $data->pekerjaan,
      			'nama_perusahaan' => $data->nama_perusahaan,
      			'bidang_usaha' => $data->bidang_usaha,
      			'jabatan' => $data->jabatan,
      			'lama_bekerja' => $data->lama_bekerja,
      			'alamat_kantor' => $data->alamat_kantor,
      			'kode_pos_kantor' => $data->postcode_kantor,
      			'telp_kantor' => $data->telp_kantor,
      			'kantor_sebelum' => $data->kantor_sebelum,
      			'nama_bank' => $data->nama_bank,
      			'cabang' => $data->cabang,
      			'telp_bank' => $data->telp_bank,
      			'no_rek' => $data->no_rek,
      			'nama_rek' => $data->nama_rek,
      			'jenis_tabungan' => $data->jenis_tabungan,
      			'id_card' => $data->id_card,
      			'rek_koran' => $data->rek_koran,
      			'foto' => $data->foto
        ]);
		 RequestUpdateAccount::where('id',$request->request_id)->update([
			'status' => 'approved'
		 ]);
		 Notification::create([
            'user_id' => $data->user_id,
            'title' => 'permintaan update data pribadi akun real anda diterima',
            'url' => route('real.account.user')
        ]);
          return redirect()->route('approve.update.account');
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
		  Notification::create([
            'user_id' => $data->user_id,
            'title' => 'permintaan update data pribadi akun real anda ditolak',
            'url' => route('real.account.user')
        ]);
          return redirect()->route('approve.update.account');
      }

    }
	
	public function approve_demo_post(Request $request)
    {
		Mt4User::where('id', $request->id)->update(['is_approved' => 'yes']);
		$data = Mt4User::where('id', $request->id)->first();
		Notification::create([
            'user_id' => $data->user_id,
            'title' => 'demo akun anda sudah diapprove oleh admin',
            'url' => route('demo.account')
        ]);
		return redirect()->route('approve.demo');
    }
	
    public function manage_real_account($id = false){

      if(!$id):
        $accounts = RequestAccount::where('status','pending')->orWhere('status','request')->orderBy('updated_at')->paginate();
        return view('admin.account.manage-real-account', ['accounts' => $accounts]);
      else:
        $accountType = accountType::all();
        $account = RequestAccount::find($id);
        return view('admin.account.manage-real-account-detail', ['order' => $account, 'accountType' => $accountType]);
      endif;
    }
    public function manage_real_account_post(Request $request){
	  $data = RequestAccount::where('id',$request->request_id)->first();
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
		Notification::create([
            'user_id' => $data->user_id,
            'title' => 'pembuatan real akun anda berhasil',
            'url' => route('real.account.user')
        ]);
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
		  
		  Notification::create([
            'user_id' => $data->user_id,
            'title' => 'pembuatan real akun anda ditolak, silahkan update data pribadi anda',
            'url' => route('create.account.real')
        ]);
          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }

    }
}
