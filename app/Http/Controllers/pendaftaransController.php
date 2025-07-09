<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        $nomor = 1;
        return view('pendaftaran.home', compact('pendaftarans', 'nomor'));
    }

    public function create()
    {
        return view('pendaftaran.tambah');
    }

    public function store(Request $request)
    {
        Pendaftaran::create($request->only(['nisn', 'nama', 'nik', 'jk', 'alamat', 'status']));
        return redirect('/home');
    }

    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->only(['nisn', 'nama', 'nik', 'jk', 'alamat', 'status']));
        return redirect('/home');
    }

    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return redirect('/home');
    }
}
