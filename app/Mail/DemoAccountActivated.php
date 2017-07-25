<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoAccountActivated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $name;
    public $login;
	public $password;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
		$this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.DemoAccountActivated')
                    ->with(['name' => $this->name],['login' => $this->login],['password' => $this->password]);
    }
}
