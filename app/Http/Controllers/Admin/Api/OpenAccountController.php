<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
class OpenAccountController extends Controller
{
    public function get_user_tasks()
    {
      foreach(Auth::user()->tasks as $key => $row):
        $response[$key]['title'] = $row->task->task_title;
        $response[$key]['form_number'] = $row->task->task_form_number;
        $response[$key]['action'] = $row->task->task_action;
        $response[$key]['status'] = $row->status;
        $response[$key]['action_url'] = url($row->task->task_url);
        $response[$key]['description'] = $row->task->task_description;
      endforeach;
      return response()->json($response);
    }
}
