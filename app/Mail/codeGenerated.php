<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class codeGenerated extends Mailable
{
   use Queueable, SerializesModels;

   public $code;
   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct($code)
   {
      $this->code = $code;
   }



   /**
   * Build the message.
   *
   * @return $this
   */
   public function build()
   {
      return $this->from('no-responder@app.gov.co')
      ->subject("Código para AEEP - AGENCIA APP")
      ->view('emails.code')
      ->with('code');
   }
}
