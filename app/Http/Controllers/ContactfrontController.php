<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use App\Models\Footer;
use App\Models\SosialMedium;
use Illuminate\Http\Request;

class ContactfrontController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        $sosial_medias = SosialMedium::all();
        return view('tampilan_web.contact', compact('footers', 'sosial_medias'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'description' => 'required|string',
        ]);

        // Simpan ke database
        Contactus::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
