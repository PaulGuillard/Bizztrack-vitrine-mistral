<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteTeamMail extends Mailable
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
            ->subject('Nouvelle demande de devis - BizzTrack International')
            ->markdown('emails.quote.team')
            ->with([
                'quoteData' => $this->quoteData,
            ]);
    }
}
