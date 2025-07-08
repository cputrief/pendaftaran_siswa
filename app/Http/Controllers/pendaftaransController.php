<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftarans;

class PendaftaranController extends Controller
{
    // Tampilkan data
    public function index()
    {
        $data = Pendaftarans::all();
        return view('home', compact('$data'));
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'jk' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'status' => 'required|in:Siswa,Alumni',
        ]);

        Pendaftarans::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Tampilkan data untuk diedit
    public function edit($id)
    {
        $item = Pendaftarans::findOrFail($id);
        return response()->json($item);
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'jk' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'status' => 'required|in:Siswa,Alumni',
        ]);

        $item = Pendaftarans::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diupdate!');
    }

    // Hapus data
    public function destroy($id)
    {
        $item = Pendaftarans::findOrFail($id);
        $item->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil dihapus!');
    }
}
