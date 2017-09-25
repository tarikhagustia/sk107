<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Withdrawal extends Mailable
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
	
	public $bank;

    public $norek;
	
	public $nama_rek;

    public function __construct($name, $email, $login, $bank, $norek, $nama_rek)
    {
        $this->name = $name;
        $this->email = $email;
		$this->login = $login;
		$this->bank = $bank;
		$this->norek = $norek;
		$this->nama_rek = $nama_rek;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.Withdrawal')
                    ->subject('Permintaan Withdrawal Account')
                    ->with(['name' => $this->name, 'email' => $this->email, 'login' => $this->login, 'bank' => $this->bank, 'norek' => $this->norek, 'nama_rek' => $this->nama_rek]);
    }
}
