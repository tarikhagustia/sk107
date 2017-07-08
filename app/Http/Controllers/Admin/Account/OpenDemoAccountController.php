<?php

namespace App\Http\Controllers\Admin\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class OpenDemoAccountController extends Controller
{
    public function index()
    {
      return view('admin.account.open-demo-account');
    }
}
