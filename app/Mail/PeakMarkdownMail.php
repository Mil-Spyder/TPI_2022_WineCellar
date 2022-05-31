<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Bottle;

class PeakMarkdownMail extends Mailable
{
    public $url = 'https://winecellar.test';
    public $data = [];
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Bottle $bottle)
    {
        $this->data =$bottle;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('caveavin01@test.com')
            ->subject('Super bonne nouvelle')->markdown('emails.peak-markdown');
    }
}
