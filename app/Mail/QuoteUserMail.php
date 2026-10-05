<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The quote data.
     *
     * @var array
     */
    public $quoteData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $quoteData)
    {
        $this->quoteData = $quoteData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Confirmation de votre demande de devis - BizzTrack International')
            ->markdown('emails.quote.user')
            ->with([
                'quoteData' => $this->quoteData,
            ]);
    }
}
