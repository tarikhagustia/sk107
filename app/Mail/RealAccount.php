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
	public $files;

    public function __construct($datas,$files)
    {
        $this->datas = $datas;
		$this->files = $files;
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
                    ->with(['datas' => $this->datas])->attach($this->files);
    }
}
