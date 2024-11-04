<?php

namespace App\Http\Controllers;

use App\Models\Capability;
use App\Models\Contactperson;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Herosection;
use App\Models\Otomotive;
use App\Models\Product;
use App\Models\SosialMedium;
use App\Models\Trading;
use Illuminate\Http\Request;

class IndexfrontController extends Controller
{
    public function index() {
        $footers = Footer::all();
        $sosial_medias = SosialMedium::all();
        $herosections = Herosection::all();
        $galeries = Gallery::all();
        $capabilitys = Capability::all();
        $otomotives = Otomotive::all();
        $tradings = Trading::all();
        $products = Product::populer()->get();
        $contact_persons = Contactperson::all();
        return view('tampilan_web.index', compact('footers', 'sosial_medias', 'herosections', 'galeries', 'capabilitys','otomotives', 'tradings','products','contact_persons'));
    }
}
