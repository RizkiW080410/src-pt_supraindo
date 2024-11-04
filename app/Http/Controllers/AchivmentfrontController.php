<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Legalitas;
use App\Models\Sertifikat;
use App\Models\SosialMedium;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class AchivmentfrontController extends Controller
{
    public function index() {
        $footers = Footer::all();
        $sosial_medias = SosialMedium::all();
        $legalitys = Legalitas::all();
        $testimonis = Testimoni::all();
        $sertifikats = Sertifikat::all();
        return view('tampilan_web.achivment', compact('footers', 'sosial_medias','legalitys','testimonis','sertifikats'));
    }
}
