<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Mail;
use PDF;
use File;
use Carbon;
use DB;
use App\Mail\RealAccount;
use App\Models\UserTask;
use App\Models\RequestAccount;
use App\Models\Mt4User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


use App\Models\AccountType;
class FormController extends Controller
{
    public function bpk_03()
    {
      $accountType = AccountType::all();
      $order = Auth::user()->lastRequestAccount();
      return view('admin.account.form.107_PBK_03', ['order' => $order, 'accountType' => $accountType]);
    }
	public function bpk_02_1()
    {
	  $demos = Mt4User::where('user_id',Auth::user()->id)->get();	
      return view('admin.account.form.107_PBK_02_1',['demos' => $demos[0]]);
    }
	public function bpk_02_2()
    {
	    $datas = Auth::user()->lastRequestAccount();
		$demos = Mt4User::where('user_id',Auth::user()->id)->get();	
      return view('admin.account.form.107_PBK_02_2', ['datas'=> $datas, 'demos'=>$demos[0]]);
    }
    public function bpk_01()
    {
      return view('admin.account.form.107_PBK_01');
    }
    public function bpk_04_2()
    {
      return view('admin.account.form.107_PBK_04_2');
    }
    public function bpk_05_2()
    {
      return view('admin.account.form.107_PBK_05_2');
    }
    public function bpk_06()
    {
      return view('admin.account.form.107_PBK_06');
    }
    public function bpk_07()
    {
      return view('admin.account.form.107_PBK_07');
    }
	public function bpk_01_check()
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 1)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_02_1_check(Request $request)
	{
		$date=date_create($request->dob);
		$dob= date_format($date,"Y-m-d");
		RequestAccount::where('user_id', Auth::user()->id)->update([
            'user_id' => Auth::user()->id,
            'nama' => $request->name,
            'tempat_lahir' => $request->place,
			'dob' => $dob,
			'alamat' => $request->alamat,
			'tipe_id' => $request->id,
			'no_id' => $request->noid,
        ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_02_2_check(Request $request)
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_03_check(Request $request)
	{
	    $image = Input::file('id_card');
        $input['imagename'] = 'id_card.'.$image->getClientOriginalExtension();
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id);
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $id_card = $fullpath;

		$image = Input::file('rek_koran');
        $input['imagename'] = 'rek_koran.'.$image->getClientOriginalExtension();
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id);
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $rek_koran = $fullpath;

		$image = Input::file('foto');
        $input['imagename'] = 'foto.'.$image->getClientOriginalExtension();
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id);
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $foto = $fullpath;
        // dd($request->approval_yes);
	  RequestAccount::where('user_id', Auth::user()->id)->update([
            'user_id' => Auth::user()->id,
			      'account_type_id' => 1,
            'nama' => $request->name,
            'tempat_lahir' => $request->place,
      			'dob' => $request->dob,
      			'alamat' => $request->alamat,
      			'tipe_id' => $request->identity_type,
      			'no_id' => $request->indentity_number,
      			'phone_number' => $request->phone_number,
      			'pengalaman' => $request->pengalaman,
      			'tujuan' => $request->tujuan,
      			'npwp' => $request->npwp,
      			'jenis_kelamin' => $request->jenis_kelamin,
      			'status_perkawinan' => $request->status_perkawinan,
      			'nama_ibu' => $request->ibu,
      			'kode_pos' => $request->postcode,
      			'status_rumah' => $request->status_rumah,
      			'telp_rumah' => $request->telpon_rumah,
      			'keluarga_kbi' => $request->keluarga_kbi,
      			'pailit' => $request->pailit,
      			'nama_darurat' => $request->name_darurat,
      			'telp_darurat' => $request->telp_darurat,
      			'hubungan' => $request->hubungan_darurat,
      			'alamat_darurat' => $request->alamat_darurat,
      			'pekerjaan' => $request->pekerjaan,
      			'nama_perusahaan' => $request->nama_perusahaan,
      			'bidang_usaha' => $request->bidang_usaha,
      			'jabatan' => $request->jabatan,
      			'lama_bekerja' => $request->lama_bekerja,
      			'alamat_kantor' => $request->alamat_kantor,
      			'kode_pos_kantor' => $request->postcode_kantor,
      			'telp_kantor' => $request->telp_kantor,
      			'kantor_sebelum' => $request->kantor_sebelum,
      			'nama_bank' => $request->nama_bank,
      			'cabang' => $request->cabang,
      			'telp_bank' => $request->telp_bank,
      			'no_rek' => $request->no_rek,
      			'nama_rek' => $request->nama_rek,
      			'jenis_tabungan' => $request->jenis_tabungan,
      			'id_card' => $id_card,
      			'rek_koran' => $rek_koran,
      			'foto' => $foto,
            'aproval_yes' => $request->approval_yes
        ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'current']);
	  return redirect()->route('create.account.real');
	}
	public function bpk_04_2_check()
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_05_2_check()
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_06_check()
	{

	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_07_check(Request $request)
	{
	  $datas = RequestAccount::where('user_id',Auth::user()->id)->get();
	  // Mail::to(env('OPENREAL_EMAIL'))->send(new RealAccount($datas));
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'active']);
	  return back();
	}
	public function bpk_03_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
	  
	  $tipe = DB::table('request_accounts')
            ->join('account_types', 'request_accounts.account_type_id', '=', 'account_types.id')
            ->select('account_types.account_name')
			->where('request_accounts.user_id',Auth::user()->id)
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
	  $dob = strtotime($data['dob']);
	  $data['dob'] = date('j F Y',$dob);
      $pdf = PDF::loadView('admin.account.form.107_PBK_03_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK03.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK03.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK03.pdf'), $output);  
	  }
	  return $pdf->download('PBK03.pdf');
    }
	public function bpk_02_1_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
	  $demos = Mt4User::where('user_id',Auth::user()->id)->get();
	  $demo	= $demos[0];
	  $pdf = PDF::loadView('admin.account.form.107_PBK_02_1_download',compact('demo'),compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK02-1.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK02-1.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK02-1.pdf'), $output);  
	  }
	  return $pdf->download('PBK02-1.pdf');
    }
	public function bpk_02_2_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
	  $demos = Mt4User::where('user_id',Auth::user()->id)->get();
	  $demo	= $demos[0];
	  $pdf = PDF::loadView('admin.account.form.107_PBK_02_2_download',compact('demo'),compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK02-2.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK02-2.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK02-2.pdf'), $output);  
	  }
	  return $pdf->download('PBK02-2.pdf');
    }
    public function bpk_01_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_01_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK01.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK01.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK01.pdf'), $output);  
	  }
	  return $pdf->download('PBK01.pdf');
    }
    public function bpk_04_2_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;	
      $pdf = PDF::loadView('admin.account.form.107_PBK_04_2_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK04-2.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK04-2.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK04-2.pdf'), $output);  
	  }
	  return $pdf->download('PBK04-2.pdf');
    }
    public function bpk_05_2_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_05_2_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK05-2.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK05-2.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK05-2.pdf'), $output);  
	  }
	  return $pdf->download('PBK05-2.pdf');
    }
    public function bpk_06_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_06_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK06.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK06.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK06.pdf'), $output);  
	  }
	  return $pdf->download('PBK06.pdf');
    }
    public function bpk_07_download()
    {
	  $today = Carbon::now();	
	  $data = Auth::user()->lastRequestAccount();	
	  $data['today'] = $today;
      $pdf = PDF::loadView('admin.account.form.107_PBK_07_download',compact('data'));
	  $output = $pdf->output();
	  $path = public_path('/pdf/'.Auth::user()->id);
	  $fullpath = public_path('/pdf/'.Auth::user()->id.'/PBK07.pdf');
	  if(!file_exists($path)){
	    $result = File::makeDirectory($path, 0775, true);
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK07.pdf'), $output);  
	  }else{
		file_put_contents(public_path('/pdf/'.Auth::user()->id.'/PBK07.pdf'), $output);  
	  }
	  return $pdf->download('PBK07.pdf');
    }
}
