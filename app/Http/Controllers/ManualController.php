<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {
        // Haal het merk op met de gegeven ID
        $brand = Brand::findOrFail($brand_id);

        // Haal de handleidingen voor het merk op
        $manuals = Manual::where('brand_id', $brand_id)->get();

        // Haal de 5 populairste handleidingen op op basis van views
        $popularManuals = Manual::where('brand_id', $brand_id)
                                ->orderByDesc('views')
                                ->limit(5)
                                ->get();

        // Stuur de gegevens naar de view
        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $manuals,
            "popularManuals" => $popularManuals,  // Voeg de populaire handleidingen toe
        ]);
    }
}
