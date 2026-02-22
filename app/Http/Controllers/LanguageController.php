<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch language
     */
    public function switch(Request $request, $locale)
    {
        // Validate locale
        if (!array_key_exists($locale, config('app.available_locales'))) {
            abort(400, 'Invalid locale');
        }

        // Store locale in session
        Session::put('locale', $locale);

        // Redirect back
        return redirect()->back();
    }
}
