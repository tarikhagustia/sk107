<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\RequestAccount;
use App\Models\Task;
use App\Models\UserTask;
use App\Services\ActivationService;
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

        /* Register User Real Account */
        $request = RequestAccount::create([
          'user_id' => $user->id,
          'account' => null,
          'status' => 'request'
        ]);

        $tasks = Task::all();
        foreach($tasks as $row){
          UserTask::create([
            'user_id' => $user->id,
            'request_account_id' => $request->id,
            'task_id' => $row->id,
            'status' => ($row->task_form_number == '107.PBK.01') ? "current" : "disabled",
          ]);
        }

        $this->activationService->sendActivationMail($user);
    }
}
