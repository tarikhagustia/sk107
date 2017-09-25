<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Deposit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;

    public $email;
	
	public $login;
	
	public $bukti;

    public function __construct($name, $email, $login, $bukti)
    {
        $this->name = $name;
        $this->email = $email;
		$this->login = $login;
		$this->bukti = $bukti;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.Deposit')
                    ->subject('Permintaan Deposit Account')
                    ->with(['name' => $this->name, 'email' => $this->email, 'login => $this->login'])->attach($this->bukti);
    }
}
