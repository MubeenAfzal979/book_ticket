<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendTicketEmail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data=[];
    public function __construct()
    {
        // echo 'mail func constructor<br>';
        // $this->data=$data;
    }
    /**
     * Build the message.
     *
     * @return $this
    */
    public function build()
    {
        return $this->view('eticket')
                    ->subject('asdasd')
                    ->with('assasd');
    }
}
