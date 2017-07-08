<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
class ChangePasswordController extends Controller
{
    public function change_password_post(Request $request)
    {
      $this->validate($request, [
          'old_password' => 'required|old_password:'.Auth::user()->password,
          'new_password' => 'required',
          'new_password_confirmation' => 'required',
      ]);

      $sql = User::find(Auth::user()->id);

      $sql->password = bcrypt($request->new_password);
      try {
        $sql->save();
        return redirect('admin/profile')->with(['success' => 'Berhasil merubah kata sandi']);
      } catch (\Exception $e) {
        return redirect('admin/profile')->with(['error' => 'Gagal merubah kata sandi']);
      }


    }
}
