<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    public function index()
    {
        // Alle merken
        $brands = Brand::orderBy('name')->get();

        // Top 5 populairste handleidingen op basis van aantal views
        $popularManuals = Manual::with('brand')
            ->orderByDesc('views')
            ->take(5)
            ->get();

        return view('home', [
            'brands' => $brands,
            'popularManuals' => $popularManuals
        ]);
    }
}
