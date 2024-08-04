<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Customers;
use App\Models\Pegawai;

class KeluhanController extends Controller
{
    /**
     * Menampilkan daftar keluhan.
     */
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index', compact('keluhan'));
    }

    /**
     * Menampilkan form untuk membuat keluhan baru.
     */
    public function create()
    {
        $kendaraan = Kendaraan::all();
        $customers = Customers::all();
        $pegawai = Pegawai::all();
        return view('keluhan.create', compact('kendaraan', 'customers', 'pegawai'));
    }

    /**
     * Menyimpan keluhan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required|string|max:150',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customers,id',
            'id_pegawai' => 'required|exists:pegawai,id',
        ]);

        Keluhan::create($request->only([
            'nama_keluhan',
            'ongkos',
            'no_pol',
            'id_customer',
            'id_pegawai',
        ]));

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail keluhan.
     */
    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show', compact('keluhan'));
    }

    /**
     * Menampilkan form untuk mengedit keluhan.
     */
    public function edit(Keluhan $keluhan)
    {
        $kendaraan = Kendaraan::all();
        $customers = Customers::all();
        $pegawai = Pegawai::all();
        return view('keluhan.edit', compact('keluhan', 'kendaraan', 'customers', 'pegawai'));
    }

    /**
     * Memperbarui keluhan yang ada.
     */
    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'nama_keluhan' => 'required|string|max:150',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customers,id',
            'id_pegawai' => 'required|exists:pegawai,id',
        ]);

        $keluhan->update($request->only([
            'nama_keluhan',
            'ongkos',
            'no_pol',
            'id_customer',
            'id_pegawai',
        ]));

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil diperbarui.');
    }

    /**
     * Menghapus keluhan.
     */
    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();

        return redirect()->route('keluhan.index')
            ->with('success', 'Keluhan berhasil dihapus.');
    }
}
