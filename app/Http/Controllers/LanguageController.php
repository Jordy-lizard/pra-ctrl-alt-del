<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        if (in_array($lang, ['nl', 'en'])) {
            App::setLocale($lang);
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
}
