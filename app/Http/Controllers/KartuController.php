<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\KartuAnggota;
use Illuminate\Http\Request;

class KartuController extends Controller
{
    // Menampilkan daftar dan detail kartu
    public function index(Request $request)
    {
        $daftar = Anggota::all();
        $kartu = KartuAnggota::all()->keyBy('anggota_id');

        $detail = $request->filled('id')
            ? Anggota::findOrFail($request->id)
            : null;

        return view('kartu.index', compact('daftar', 'kartu', 'detail'));
    }

    // Membuat nomor kartu
    public function buat(Request $request)
    {
        $data = $request->validate([
            'anggota_id' => 'required|exists:anggota,id'
        ]);

        $id = $data['anggota_id'];
        $nomor = 'DL-' . date('Y') . '-' . str_pad($id, 3, '0', STR_PAD_LEFT);

        KartuAnggota::firstOrCreate(
            ['anggota_id' => $id],
            ['nomor_kartu' => $nomor]
        );

        return redirect()->route('kartu.index', ['id' => $id]);
    }

    // Menghapus nomor kartu
    public function hapus(Request $request)
    {
        $data = $request->validate([
            'anggota_id' => 'required|exists:anggota,id'
        ]);

        $id = $data['anggota_id'];

        KartuAnggota::where('anggota_id', $id)->delete();

        return redirect()->route('kartu.index', ['id' => $id]);
    }
}
