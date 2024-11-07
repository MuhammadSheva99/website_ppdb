<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // Menampilkan form zona prestasi
    public function showZonaPrestasiForm()
    {
        return view('pendaftaran.zona_prestasi'); // Pastikan view ini ada di resources/views/pendaftaran/zona_prestasi.blade.php
    }

    // Menyimpan data pendaftaran dari form zona prestasi
    public function store(Request $request)
    {
        // Validasi data form
        $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'achievement' => 'required|string',
            'certificate' => 'required|file|mimes:pdf|max:2048', // Pastikan file adalah PDF
            'school' => 'required|string|max:255',
        ]);

        // Logika penyimpanan data (misalnya, menyimpan ke database)
        // Contoh: $data = new Pendaftaran(); $data->name = $request->name; // dan seterusnya...

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('pendaftaran.zona_prestasi')->with('success', 'Pendaftaran berhasil!');
    }
}
