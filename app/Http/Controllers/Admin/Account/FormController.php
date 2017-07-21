<?php

namespace App\Http\Controllers\Admin\Account;

use Auth;
use App\Models\UserTask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function bpk_03()
    {
      return view('admin.account.form.107_pbk_03');
    }
	public function bpk_02_1()
    {
      return view('admin.account.form.107_pbk_02_1');
    }
	public function bpk_02_2()
    {
      return view('admin.account.form.107_pbk_02_2');
    }
    public function bpk_01()
    {
      return view('admin.account.form.107_pbk_01');
    }
    public function bpk_04_2()
    {
      return view('admin.account.form.107_pbk_04_2');
    }
    public function bpk_05_2()
    {
      return view('admin.account.form.107_pbk_05_2');
    }
    public function bpk_06()
    {
      return view('admin.account.form.107_pbk_06');
    }
    public function bpk_07()
    {
      return view('admin.account.form.107_pbk_07');
    }
	public function bpk_01_check(Request $request)
	{
		$this->validate($request, [
          'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 1)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_02_1_check(Request $request)
	{
		$this->validate($request, [
          'name' => 'required|string|max:50',
		  'place' => 'required|string|max:30',
		  'dob' => 'required|date_format:"d-m-Y',
		  'alamat' => 'required|string|max:255',
		  'id' => 'required',
		  'noid' => 'required|numeric',
		  'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_02_2_check(Request $request)
	{
          $this->validate($request, [
          'name' => 'required|string|max:50',
		  'place' => 'required|string|max:30',
		  'dob' => 'required|date_format:d-m-Y',
		  'alamat' => 'required|string|max:255',
		  'id' => 'required',
		  'noid' => 'required|numeric',
		  'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_03_check(Request $request)
	{
		$this->validate($request, [
		  'dob' => 'required|date_format:d-m-Y',
		  'ibu' => 'required|string|max:50',
		  'alamat' => 'required|string|max:155',
		  'postcode' => 'required|numeric|max:6',
		  'home_stat' => 'accepted',
		  'telp' => 'required|numeric|max:20',
		  'inputRadios2' => 'accepted',
		  'inputRadios3' => 'accepted',
		  'name_darurat' => 'required|string|max:50',
		  'telp_darurat' => 'required|numeric|max:20',
		  'hubungan' => 'required|string|max:30',
		  'alamat_darurat' => 'required|string|max:155',
		  'telp_darurat2' => 'required|numeric|max:20',
		  'pekerjaan' => 'required|string|max:100',
		  'nama_perusahaan' => 'required|string|max:100',
		  'bidang_usaha' => 'required|string|max:100',
		  'jabatan' => 'required|string|max:100',
		  'lama_bekerja' => 'required|string|max:20',
		  'alamat_kantor' => 'required|string|max:155',
		  'postcode_kantor' => 'required|numeric|max:6',
		  'telp_kantor' => 'required|numeric|max:20',
		  'kantor_sebelum' => 'required|string|max:50',
		  'nama_bank' => 'required|string|max:50',
		  'cabang' => 'required|string|max:50',
		  'telp_kantor' => 'required|numeric|max:20',
		  'no_rek' => 'required|numeric|max:20',
		  'nama_rek' => 'required|string|max:50',
		  'jenis_tabungan' => 'accepted',
		  'id_card' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		  'rek_koran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		  'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		  'inputRadios4' => 'accepted',
		  
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_04_2_check(Request $request)
	{
		$this->validate($request, [
		  'check1' => 'accepted',
		  'check2' => 'accepted',
		  'check3' => 'accepted',
		  'check4' => 'accepted',
		  'check5' => 'accepted',
		  'check6' => 'accepted',
		  'check7' => 'accepted',
		  'check8' => 'accepted',
		  'check9' => 'accepted',
		  'check10' => 'accepted',
		  'check11' => 'accepted',
		  'check12' => 'accepted',
		  'check13' => 'accepted',
		  'check14' => 'accepted',
          'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_05_2_check(Request $request)
	{
		$this->validate($request, [
		  'check1' => 'accepted',
		  'check2' => 'accepted',
		  'check3' => 'accepted',
		  'check4' => 'accepted',
		  'check5' => 'accepted',
		  'check6' => 'accepted',
		  'check7' => 'accepted',
		  'check8' => 'accepted',
		  'check9' => 'accepted',
		  'check10' => 'accepted',
		  'check11' => 'accepted',
		  'check12' => 'accepted',
		  'check13' => 'accepted',
		  'check14' => 'accepted',
		  'check15' => 'accepted',
		  'check16' => 'accepted',
		  'check17' => 'accepted',
		  'check18' => 'accepted',
		  'check19' => 'accepted',
		  'check20' => 'accepted',
		  'check21' => 'accepted',
		  'check22' => 'accepted',
		  'check23' => 'accepted',
		  'check24' => 'accepted',
		  'selisih' => 'accepted',
		  'kantor' => 'accepted',
          'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_06_check(Request $request)
	{
		$this->validate($request, [
          'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_07_check(Request $request)
	{
		$this->validate($request, [
          'inputRadiosPersetujuan' => 'accepted',
      ]);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'active']);
	  return back();
	}
}
