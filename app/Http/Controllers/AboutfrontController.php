<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Mission;
use App\Models\SosialMedium;
use App\Models\Vision;
use Illuminate\Http\Request;

class AboutfrontController extends Controller
{
    public function index() {
        $footers = Footer::all();
        $sosial_medias = SosialMedium::all();
        $abouts = About::all();
        $visions = Vision::all();
        $missions = Mission::all();
        return view('tampilan_web.about', compact('footers', 'sosial_medias','abouts','visions','missions'));
    }
}
