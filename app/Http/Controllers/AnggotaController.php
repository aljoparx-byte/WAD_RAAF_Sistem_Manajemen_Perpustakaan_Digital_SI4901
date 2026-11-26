<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Menampilkan daftar anggota
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    // Form tambah anggota
    public function create()
    {
        //return view anggota.create'
        $anggota = Anggota::all();
        return view('anggota.create', compact('anggota'));
        
    }

    // Menyimpan anggota baru
    public function store(Request $request)
    {
        Anggota::create($this->validasi($request));
        return redirect()->route('anggota.index');
    }

    // Form edit anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    // Menyimpan perubahan
    public function update(Request $request, $id)
    {
        Anggota::findOrFail($id)->update($this->validasi($request));
        return redirect()->route('anggota.index');
    }

    // Menghapus anggota
    public function destroy($id)
    {
        Anggota::findOrFail($id)->delete();
        return redirect()->route('anggota.index');
        //return redirect() anggota.index
    }

    // Mengubah tipe keanggotaan
    public function updateTipe(Request $request, $id)
    {
        $request->validate([
            'tipe_keanggotaan' => 'required|in:Reguler,Premium'
        ]);

        Anggota::findOrFail($id)->update(
            $request->only('tipe_keanggotaan')
        );

        return redirect()->route('anggota.index');
    }

    // Validasi data anggota
    private function validasi(Request $request)
    {
        return $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email|max:100',
            'nomor_telepon' => 'required|max:20',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|max:255',
            'tipe_keanggotaan' => 'required|in:Reguler,Premium'
        ]);
    }
}
