<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Product;
use App\Models\SosialMedium;
use Illuminate\Http\Request;

class ProductfrontController extends Controller
{
    public function index() {
        $footers = Footer::all();
        $sosial_medias = SosialMedium::all();
        $products = Product::all();
        return view('tampilan_web.product', compact('footers', 'sosial_medias','products'));
    }
}
