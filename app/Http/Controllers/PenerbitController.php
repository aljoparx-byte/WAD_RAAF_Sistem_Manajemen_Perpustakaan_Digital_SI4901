<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbits = Penerbit::all();
        return view('penerbit.index', compact('penerbits'));
    }

    public function create()
    {
        return view('penerbit.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'kategori' => 'required',
            'kontak_sales' => 'required',
            'wilayah' => 'required',
            'alamat' => 'required',
        ]);

        // Mengabaikan input _token agar tidak error saat masuk database
        Penerbit::create($request->except('_token'));

        return redirect('/penerbit')->with('success', 'Data penerbit berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'kategori' => 'required',
            'kontak_sales' => 'required',
            'wilayah' => 'required',
            'alamat' => 'required',
        ]);

        $penerbit = Penerbit::findOrFail($id);
        // Mengabaikan input _token dan _method saat update
        $penerbit->update($request->except(['_token', '_method']));

        return redirect('/penerbit')->with('success', 'Data penerbit berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();

        return redirect('/penerbit')->with('success', 'Data penerbit berhasil dihapus!');
    }
}