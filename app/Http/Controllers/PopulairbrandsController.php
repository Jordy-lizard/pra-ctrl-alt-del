<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Manual;
use Illuminate\Http\Request;

class PopulairbrandsController extends Controller
{
    public function showPopularBrands()
    {
        $popularBrands = Brand::withCount('manuals')
            ->orderBy('manuals_count', 'desc')
            ->take(10)
            ->get();

        $popularManuals = Manual::with('brand')  // Laad de 'brand' relatie
            ->orderBy('views', 'desc')
            ->take(10)
            ->get();

        $brands = Brand::all()->sortBy('name');

        return view('pages.homepage', compact('popularBrands', 'popularManuals', 'brands'));
    }
}
