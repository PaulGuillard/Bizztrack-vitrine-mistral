<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Mail\QuoteTeamMail;
use App\Mail\QuoteUserMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * Display the quote form.
     */
    public function create()
    {
        return view('pages.quote.create');
    }

    /**
     * Store a new quote request.
     */
    public function store(StoreQuoteRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Format services for display
        $services = $validated['services'] ?? [];
        $validated['services'] = is_array($services) ? implode(', ', $services) : $services;

        // Send confirmation email to user
        Mail::to($validated['email'])->send(new QuoteUserMail($validated));

        // Send notification email to team
        Mail::to('info@bizztrack.eu')->send(new QuoteTeamMail($validated));

        // Redirect to confirmation page with quote data
        return redirect()->route('quote.confirmation')
            ->with('quoteData', $validated)
            ->with('success', 'Votre demande de devis a été envoyée avec succès !');
    }

    /**
     * Display the confirmation page.
     */
    public function confirmation()
    {
        $quoteData = session('quoteData', []);
        
        return view('pages.quote.confirmation', [
            'quoteData' => $quoteData
        ]);
    }
}
