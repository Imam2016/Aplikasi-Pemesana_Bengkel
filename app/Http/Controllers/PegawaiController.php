<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        
        if (!$pegawai) {
            return redirect()->route('pegawai.index')
                ->with('error', 'Pegawai tidak ditemukan.');
        }
        
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);
        
        if (!$pegawai) {
            return redirect()->route('pegawai.index')
                ->with('error', 'Pegawai tidak ditemukan.');
        }
        
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id_pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ]);

        $pegawai = Pegawai::find($id_pegawai);

        if (!$pegawai) {
            return redirect()->route('pegawai.index')
                ->with('error', 'Pegawai tidak ditemukan.');
        }

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy($id_pegawai)
    {
        $pegawai = Pegawai::find($id_pegawai);

        if (!$pegawai) {
            return redirect()->route('pegawai.index')
                ->with('error', 'Pegawai tidak ditemukan.');
        }

        $pegawai->delete();

        return redirect()->route('pegawai.index')
            ->with('success', 'Pegawai berhasil dihapus.');
    }
}