<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use Mail;
use App\Mail\RealAccount;
use App\Models\UserTask;
use App\Models\RequestAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FormController extends Controller
{
    public function bpk_03()
    {
      $order = Auth::user()->lastRequestAccount();
	  $datas = RequestData::where('user_id',Auth::user()->id)->get();
      return view('admin.account.form.107_PBK_03', [
        'order' => $order
      ],[
        'datas' => $datas
      ]);
    }
	public function bpk_02_1()
    {
      return view('admin.account.form.107_PBK_02_1');
    }
	public function bpk_02_2()
    {
	  $datas = Auth::user()->lastRequestAccount();
      return view('admin.account.form.107_PBK_02_2', ['datas'=> $datas]);
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
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id.'/id');
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $id_card = $fullpath;

		$image = Input::file('rek_koran');
        $input['imagename'] = 'rek_koran.'.$image->getClientOriginalExtension();
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id.'/rek_koran');
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $rek_koran = $fullpath;

		$image = Input::file('foto');
        $input['imagename'] = 'foto.'.$image->getClientOriginalExtension();
  	    $destinationPath = public_path('/uploads/'.Auth::user()->id.'/foto');
  	    $image->move($destinationPath, $input['imagename']);
  	    $fullpath = '/uploads/'.Auth::user()->id.'/'.$input['imagename'];
  	    $foto = $fullpath;

	  RequestAccount::where('user_id', Auth::user()->id)->update([
            'user_id' => Auth::user()->id,
			'jenis_akun' => $request->account_type,
            'nama' => $request->name,
            'tempat_lahir' => $request->place,
			'dob' => $request->dob,
			'alamat' => $request->alamat,
			'tipe_id' => $request->identity_type,
			'no_id' => $request->indentity_number,
			'phone' => $request->phone_number,
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
        ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'current']);
	  return back();
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
	  Mail::to(env('OPENREAL_EMAIL'))->send(new RealAccount($datas));
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'active']);
	  return back();
	}
}
