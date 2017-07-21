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
      $order = Auth::user()->lastRequestAccount();
      return view('admin.account.form.107_pbk_03', [
        'order' => $order
      ]);
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
    		  'dob' => 'required|date_format:"d-m-Y',
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
		  'inputRadios' => 'accepted',
          'inputRadiosPersetujuan' => 'accepted',

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
