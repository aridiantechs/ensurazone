<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GroundProofComplete extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->data = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ground Proof Completed')->markdown('emails.ground_proof.complete')/* ->attach(public_path().'/storage/uploads/uploadData/'.$this->data['report'], [
            'as' => 'findings.pdf',
            'mime' => 'application/pdf',
        ]) */;
    }
}
