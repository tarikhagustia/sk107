<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\RequestAccount;
use App\Models\Task;
use App\Models\UserTask;
use App\User;
use App\Services\ActivationService;
use Carbon\Carbon;
class LogRegisteredUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $activationService;
    public function __construct(ActivationService $activationService)
    {
        $this->activationService = $activationService;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;
		$data = User::where('id',$user->id)->first();
        /* Register User Real Account */
        $request = RequestAccount::create([
          'user_id' => $user->id,
          'account_type_id' => 1,
          'order_number' => Carbon::now()->timestamp,
          'account' => null,
          'status' => 'filling',
		  'dob' => $data->dob,
		  'nama' => $user->name,
		  'phone_number' => $data->phone
        ]);

        $tasks = Task::all();
        foreach($tasks as $row){
          UserTask::create([
            'user_id' => $user->id,
            'request_account_id' => $request->id,
            'task_id' => $row->id,
            'status' => ($row->task_form_number == '107.PBK.01') ? "current" : "disabled",
			'is_active' => 'yes'
          ]);
        }

        $this->activationService->sendActivationMail($user);
    }
}
