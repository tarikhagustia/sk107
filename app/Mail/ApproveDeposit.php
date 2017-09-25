<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApproveDeposit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $r;

    public function __construct($r)
    {
      $this->r = $r;
      dd($this->r);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.ApproveDeposit')
                    // ->subject('Approve Request Deposit')
                    ->with(['request' => $this->request_attributes]);
    }
}
