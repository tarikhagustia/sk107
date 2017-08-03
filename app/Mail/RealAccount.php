<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RealAccount extends Mailable
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
        return $this->subject('Permintaan pembukaan akun real')
                    ->view('emails.RealAccount')
                    ->with(['datas' => $this->datas])->attach(public_path($this->datas->id_card))->attach(public_path($this->datas->rek_koran))->attach(public_path($this->datas->foto));
    }
}
