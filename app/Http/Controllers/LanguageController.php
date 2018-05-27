<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request, $locale = 'en')
    {
        if (in_array($locale, config('app.locales'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
