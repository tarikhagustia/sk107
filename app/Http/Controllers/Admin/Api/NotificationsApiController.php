<?php

namespace App\Http\Controllers\Admin\Api;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestAccount;
use App\Models\Notification;
use App\User;

class NotificationsApiController extends Controller
{
    //
    public function get_notifications(){
      $query = Notification::where('user_id',Auth::user()->id)->where('status','new')->orderBy('created_at', 'DESC')->get();
      $response = [];
      foreach($query as $key => $row){
            $response[$key] = [
                "id" => $row->id,
                "title" => $row->title,
                "timestamp" => $row->created_at->diffForHumans(),
<<<<<<< HEAD
				"url" => route('check.notifications',['id' => $row->id])
=======
                "url" => $row->url,
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
            ];
      }
      return response()->json($response);
    }
<<<<<<< HEAD
	
	public function check_notifications($id){
      $data = Notification::where('id',$id)->first();
	  Notification::where('id', $id)->update([
		"status" => 'seen',
	  ]);
      return redirect($data->url);
    }
=======
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
}
