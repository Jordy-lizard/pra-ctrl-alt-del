<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages/contactt');
    }

    public function submit(Request $request)
    {
        // Valideer het formulier
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email',
            'bericht' => 'required|string',
        ]);

        // Schrijf de gegevens naar een txt-bestand
        $content = "Naam: {$validated['naam']}\nEmail: {$validated['email']}\nBericht:\n{$validated['bericht']}\n---\n";
        Storage::disk('local')->append('contactberichten.txt', $content);

        return back()->with('success', 'Bedankt voor je bericht!');
    }
}
