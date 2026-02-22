<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale is stored in session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        } 
        // Otherwise check browser language
        else {
            $locale = $request->getPreferredLanguage(array_keys(config('app.available_locales')));
        }

        // Validate locale
        if (!array_key_exists($locale, config('app.available_locales'))) {
            $locale = config('app.fallback_locale');
        }

        // Set application locale
        App::setLocale($locale);

        return $next($request);
    }
}