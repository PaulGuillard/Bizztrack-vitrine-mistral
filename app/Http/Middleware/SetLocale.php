<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if language is set in session
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        
        // Check if language is set in request (query parameter)
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            if (in_array($lang, ['fr', 'en', 'nl'])) {
                Session::put('locale', $lang);
                App::setLocale($lang);
            }
        }
        
        return $next($request);
    }
}
