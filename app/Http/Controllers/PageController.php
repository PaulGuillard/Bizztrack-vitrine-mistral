<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the tarifs page.
     */
    public function tarifs()
    {
        return view('pages.tarifs');
    }

    /**
     * Display the quote form page.
     */
    public function createQuote()
    {
        return view('pages.quote.create');
    }

    /**
     * Display the login page.
     */
    public function login()
    {
        return view('pages.auth.login');
    }
}
