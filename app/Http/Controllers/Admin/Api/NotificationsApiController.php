<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestAccount;
class NotificationsApiController extends Controller
{
    //
    public function get_notifications(){
      $query = RequestAccount::select('id', 'updated_at', 'nama')->where('status', 'request')->orderBy('updated_at', 'DESC')->get();
      $response = [];
      foreach($query as $key => $row){
            $response[$key] = [
                "id" => $row->id,
                "title" => "Permintaan pembukaan akun A/N " . $row->nama,
                "timestamp" => $row->updated_at->diffForHumans(),
                "url" => route('account.real.manage', ['id' => $row->id]),
            ];
      }
      return response()->json($response);
    }
}
