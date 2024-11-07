<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan form pendaftaran.
     */
    public function create()
    {
        return view('pendaftaran'); // Pastikan view ini ada
    }

    /**
     * Menyimpan data pendaftaran ke database dan mengalihkan berdasarkan jalur.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'achievement' => 'required|string',
            'certificate' => 'required|file|mimes:pdf|max:10240', // max 10MB
            'school' => 'required|string|max:255',
        ]);

        // Simpan data ke database atau proses lainnya
        $siswa = Siswa::create($validatedData);

        // Pengalihan berdasarkan jalur yang dipilih
        return redirect()->route('pendaftaran.prestasi')->with('success', 'Pendaftaran berhasil!');
    }

    public function formZonasi()
    {
        return view('pendaftaran.zonasi'); // Pastikan view ini ada
    }

    public function formPrestasi()
    {
        return view('pendaftaran.prestasi'); // Pastikan view ini ada
    }

    public function formAfirmasi()
    {
        return view('pendaftaran.afirmasi'); // Pastikan view ini ada
    }

    public function formPerpindahan()
    {
        return view('pendaftaran.perpindahan'); // Pastikan view ini ada
    }

    // Fungsi cek status dan pengumuman
    public function cekStatus()
    {
        // Logika cek status
    }

    public function pengumuman()
    {
        // Logika pengumuman
    }
}
