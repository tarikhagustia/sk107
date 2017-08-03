<?php

namespace App\Http\Controllers\Admin\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagedepositController extends Controller
{
  public function index()
  {
    return view('admin.deposit.managedeposit');
  }
}
