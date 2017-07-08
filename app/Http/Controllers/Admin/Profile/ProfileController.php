<?php

namespace App\Http\Controllers\Admin\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
      return view('admin.profile.index');
    }
}
