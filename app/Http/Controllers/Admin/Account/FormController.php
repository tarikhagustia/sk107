<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function bpk_03()
    {
      return view('admin.account.form.107_pbk_03');
    }
    public function bpk_01()
    {
      return view('admin.account.form.107_pbk_01');
    }
    public function bpk_05()
    {
      return view('admin.account.form.107_pbk_05');
    }
    public function bpk_06()
    {
      return view('admin.account.form.107_pbk_06');
    }
    public function bpk_07()
    {
      return view('admin.account.form.107_pbk_07');
    }
    public function bpk_08()
    {
      return view('admin.account.form.107_pbk_08');
    }
}
