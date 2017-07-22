<?php

namespace App\Http\Controllers\Admin\Withdrawal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WithdrawalController extends Controller
{
  public function index()
  {
    return view('admin.Withdrawal.Withdraw');
  }
}
