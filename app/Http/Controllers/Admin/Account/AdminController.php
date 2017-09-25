<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Carbon;
<<<<<<< HEAD
use PDF;
use Mail;
use File;
use Zipper;
use DB;
use App\Mail\DemoAccountActivated;
use App\Mail\RealAccountActivated;
use App\Mail\RealAccountRejected;
use App\Mail\UpdateAccount;
=======
use Mail;
use App\Mail\DemoAccountActivated;
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
		$demos = Mt4User::where('id',$request->id)->where('is_real','no')->first();
=======
		$demos = Mt4User::where('id',$request->id)->first();
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
	  $demos = Mt4User::where('is_approved','no')->where('is_real','no')->where('is_active','yes')->get();
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
<<<<<<< HEAD
		$temp = array();
		$temp = explode('.',$account->rek_koran);
		$ext = $temp[1];
        return view('admin.account.admin-approve-update-account-detail', ['order' => $account, 'accountType' => $accountType, 'ext'=>$ext]);
=======
        return view('admin.account.admin-approve-update-account-detail', ['order' => $account, 'accountType' => $accountType]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
    }
	
	public function approve_update_post(Request $request)
    {
<<<<<<< HEAD
	  $data = RequestUpdateAccount::where('id',$request->request_id)->first();
	  $task = UserTask::where('user_id', $data->user_id)->where('task_id', 3)->first();
	  if($request->account_status == "approved"){
		Mt4User::where('order_number', $data->order_number)->update([
			'name' => $data->nama,
		]);
		if($data->status_perkawinan == 'kawin'){
			$pasangan = $data->pasangan;
		}else{
			$pasangan = '';
		}
		$filepath = 'pdf/'.$data['user_id'].'/'.$data['order_number'].'/RequestAccount-'.$data['nama'].'-'.$data['order_number'].'.zip';
		  if(file_exists($filepath)){
			File::delete($filepath);
		  }
=======
	  $data = RequestUpdateAccount::where('id',$request->request_id)->first();	
	  if($request->account_status == "approved"){
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		  RequestAccount::where('order_number', $data->order_number)->update([
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
<<<<<<< HEAD
      			'nama_ibu' => $data->nama_ibu,
      			'kode_pos' => $data->kode_pos,
      			'status_rumah' => $data->status_rumah,
      			'telp_rumah' => $data->telp_rumah,
=======
      			'nama_ibu' => $data->ibu,
      			'kode_pos' => $data->postcode,
      			'status_rumah' => $data->status_rumah,
      			'telp_rumah' => $data->telpon_rumah,
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
      			'kode_pos_kantor' => $data->kode_pos_kantor,
=======
      			'kode_pos_kantor' => $data->postcode_kantor,
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
      			'foto' => $data->foto,
				'kode_pos_darurat' => $data->kode_pos_darurat,
            'penghasilan' => $data->penghasilan,
            'njop' => $data->njop,
            'lokasi_rumah' => $data->lokasi_rumah,
            'deposito_bank' => $data->deposito_bank,
            'deposito' => $data->deposito,
			'daftar_kekayaan' => $data->daftar_kekayaan,
			'pasangan' => $pasangan
        ]);
		
		Mt4User::where('user_id', $data->user_id)->update([
            'name' => $data->nama
        ]);
		
		 RequestUpdateAccount::where('id',$request->request_id)->update([
			'status' => 'approved'
		 ]);
		 
		  $today = Carbon::now();
		  $data = RequestAccount::where('order_number', $data->order_number)->first();
		  $data['today'] = $today;
		  $date = date_create($data->dob);
		  $data->dob = date_format($date,"d-m-Y");
		  
		  $pdf = PDF::loadView('admin.account.form.107_PBK_01_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK01.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK01.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK01.pdf'), $output);  
		  }
	  
		  
		  $demos = Mt4User::where('user_id',$data['user_id'])->where('is_real','no')->get();
		  $demo	= $demos[0];
		  $pdf = PDF::loadView('admin.account.form.107_PBK_02_1_download',compact('demo'),compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-1.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-1.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-1.pdf'), $output);  
		  }
		  
		  if($task->is_active == 'yes'){
			$demos = Mt4User::where('user_id',$data['user_id'])->where('is_real','no')->get();
			$demo	= $demos[0];
			$pdf = PDF::loadView('admin.account.form.107_PBK_02_2_download',compact('demo'),compact('data'));
			$output = $pdf->output();
			$path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
			$fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-2.pdf');
			if(!file_exists($path)){
			  $result = File::makeDirectory($path, 0775, true);
			  file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-2.pdf'), $output);  
			}else{
			  file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK02-2.pdf'), $output);  
			}
		  }else{
			  
		  }
		  
		  $tipe = DB::table('request_accounts')
				->join('account_types', 'request_accounts.account_type_id', '=', 'account_types.id')
				->select('account_types.account_name')
				->where('request_accounts.user_id',$data['user_id'])
				->first();
				
		  $data['account_type'] = $tipe->account_name;
		  if($data['account_type'] == 'mini'){
			$data['account_nominal'] = '0.1';
		  }elseif($data['account_type'] == 'reguler'){
			$data['account_nominal'] = '1';
		  }
		  $data['id_card'] = public_path($data['id_card']);
		  $data['rek_koran'] = public_path($data['rek_koran']);
		  $data['foto'] = public_path($data['foto']);
		  $date = date_create($data->dob);
		  $data->dob = date_format($date,"d-m-Y");
		  $pdf = PDF::loadView('admin.account.form.107_PBK_03_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK03.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK03.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK03.pdf'), $output);  
		  }
		  
		  
		  $pdf = PDF::loadView('admin.account.form.107_PBK_04_1_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK04-1.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK04-1.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK04-1.pdf'), $output);  
		  }
		  
		  
		  $pdf = PDF::loadView('admin.account.form.107_PBK_05_1_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf'), $output);  
		  }
		  
		  
		  $pdf = PDF::loadView('admin.account.form.107_PBK_06_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK06.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK06.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK06.pdf'), $output);  
		  }
		  
		  
		  $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK07.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK07.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK07.pdf'), $output);  
		  }
		  
		  
		  $pdf = PDF::loadView('admin.account.pernyataan',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK08.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK08.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK08.pdf'), $output);  
		  }
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);

		  $filepath = 'pdf/'.$data['user_id'].'/'.$data['order_number'].'/RequestAccount-'.$data['nama'].'-'.$data['order_number'].'.zip';
		  if(file_exists($filepath)){
			File::delete($filepath);
		  }
		  $files = glob($path.'/*');
		  Zipper::make($filepath)->add($files)->close();
		  RequestAccount::where('order_number',$data['order_number'])->update(['docs' => $filepath]);
		  Mt4User::where('order_number', $data['order_number'])->update(['docs' => $filepath]);
		  
=======
      			'foto' => $data->foto
        ]);
		 RequestUpdateAccount::where('id',$request->request_id)->update([
			'status' => 'approved'
		 ]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		 Notification::create([
            'user_id' => $data->user_id,
            'title' => 'permintaan update data pribadi akun real anda diterima',
            'url' => route('real.account.user')
        ]);
          return redirect()->route('approve.update.account');
      }

      if($request->account_status == "rejected"){
<<<<<<< HEAD
		  $user = Mt4User::where('order_number', $data->order_number)->first();
		  $today = Carbon::now();
		  $data = RequestAccount::where('order_number', $data->order_number)->first();
		  $data['today'] = $today;
		  $date = date_create($data->dob);
		  $data->dob = date_format($date,"d-m-Y");
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
          $this->validate($request, [
            'account_status' => 'required',
            'reason' => 'required'
          ]);
<<<<<<< HEAD
=======

>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
          $sql = RequestUpdateAccount::find($request->request_id);
          $sql->status = "rejected";
          $sql->rejected_reason = $request->reason;
          $sql->save();
<<<<<<< HEAD
		  Mail::to($user->email)->send(new UpdateAccount($data->nama));
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
		$temp = array();
		$temp = explode('.',$accounts->rek_koran);
		$ext = $temp[1];
        return view('admin.account.manage-real-account', ['accounts' => $accounts, 'ext'=>$ext]);
      else:
        $accountType = accountType::all();
        $account = RequestAccount::find($id);
		$temp = array();
		$temp = explode('.',$account->rek_koran);
		$ext = $temp[1];
        return view('admin.account.manage-real-account-detail', ['order' => $account, 'accountType' => $accountType, 'ext'=>$ext]);
=======
        return view('admin.account.manage-real-account', ['accounts' => $accounts]);
      else:
        $accountType = accountType::all();
        $account = RequestAccount::find($id);
        return view('admin.account.manage-real-account-detail', ['order' => $account, 'accountType' => $accountType]);
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
      endif;
    }
    public function manage_real_account_post(Request $request){
	  $data = RequestAccount::where('id',$request->request_id)->first();
<<<<<<< HEAD
	  $user = User::where('id',$data['user_id'])->first();
      if($request->account_status == "approved"){
          $this->validate($request, [
            'account_status' => 'required',
            'login_number' => 'required',
            'login_password' => 'required',
			'wp' => 'required'
=======
      if($request->account_status == "approved"){
          $this->validate($request, [
            'account_status' => 'required',
            'login_number' => 'required|numeric',
            'login_password' => 'required'
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
          ]);

          $sql = RequestAccount::find($request->request_id);
          $sql->account_number = $request->login_number;
          $sql->status = "approved";
          $sql->account_password = $request->login_password;
<<<<<<< HEAD
		  $sql->wp = $request->wp;
          $sql->save();
		  
		  
=======
          $sql->save();
		  
		  $user = User::where('id',$data['user_id'])->first();
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
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
<<<<<<< HEAD
		  ]);
		
		  $data = RequestAccount::where('id',$request->request_id)->first();
		  $today = Carbon::now();	
		  $data['today'] = $today;
		  $pdf = PDF::loadView('admin.account.form.107_PBK_05_1_download',compact('data'));
		  $output = $pdf->output();
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);
		  $fullpath = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf');
		  if(!file_exists($path)){
			$result = File::makeDirectory($path, 0775, true);
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf'), $output);  
		  }else{
			file_put_contents(public_path('/pdf/'.$data['user_id'].'/'.$data['order_number'].'/PBK05-1.pdf'), $output);  
		  }
		  
		  $path = public_path('/pdf/'.$data['user_id'].'/'.$data['order_number']);

		  $filepath = 'pdf/'.$data['user_id'].'/'.$data['order_number'].'/RequestAccount-'.$data['nama'].'-'.$data['order_number'].'.zip';
		  if(file_exists($filepath)){
			File::delete($filepath);
		  }
		  $files = glob($path.'/*');
		  Zipper::make($filepath)->add($files)->close();
	    Mail::to($user->email)->send(new RealAccountActivated($data->nama));
=======
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
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		Notification::create([
            'user_id' => $data->user_id,
            'title' => 'pembuatan real akun anda berhasil',
            'url' => route('real.account.user')
        ]);
          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }
<<<<<<< HEAD
	  
	    if($request->account_status == "pending"){
          $this->validate($request, [
            'account_status' => 'required',
          ]);
		
          $sql = RequestAccount::find($request->request_id);
          $sql->status = "pending";          
          $sql->save();
		  
          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04

      if($request->account_status == "rejected"){
          $this->validate($request, [
            'account_status' => 'required',
            'reason' => 'required'
          ]);

          $sql = RequestAccount::find($request->request_id);
          $sql->status = "rejected";
          $sql->rejected_reason = $request->reason;
          $sql->save();
<<<<<<< HEAD
		  Mail::to($user->email)->send(new RealAccountRejected($data->nama));
=======
		  
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		  Notification::create([
            'user_id' => $data->user_id,
            'title' => 'pembuatan real akun anda ditolak, silahkan update data pribadi anda',
            'url' => route('create.account.real')
        ]);
          return redirect()->route('manage.real.account')->with(['success' => 'Berhasil input data']);
      }

    }
}
