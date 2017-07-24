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
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 1)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_02_1_check(Request $request)
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 2)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'current']);
	}
	public function bpk_02_2_check(Request $request)
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 3)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'current']);
	}
	public function bpk_03_check(Request $request)
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 4)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_04_2_check(Request $request)
	{

	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 5)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_05_2_check(Request $request)
	{
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 6)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_06_check(Request $request)
	{

	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 7)->update(['status' => 'active']);
	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'current']);
	  return back();
	}
	public function bpk_07_check(Request $request)
	{

	  UserTask::where('user_id', Auth::user()->id)->where('task_id', 8)->update(['status' => 'active']);
	  return back();
	}
}
