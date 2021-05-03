<?php

namespace App\Mail;

use App\Models\Messages;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Nome Email e Assunto
        $this->subject('Nova mensagem de contato!')
             ->to('contato@devkaique.com', 'Kaique Gonçalves');
        return $this->markdown('mail.contact',[
            'data' => $this->data
        ]);
    }
}
