<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateAccountRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $datas;

    public function __construct($datas)
    {
        $this->datas = $datas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Permintaan Update Data Real Account')
                    ->view('emails.UpdateAccountRequest')
                    ->with(['datas' => $this->datas]);
    }
}
