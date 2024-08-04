<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|max:10|unique:kendaraan,no_pol',
            'no_mesin' => 'required|max:15|unique:kendaraan,no_mesin',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan created successfully.');
    }

    public function show($no_pol)
    {
        // Fetching the vehicle by its primary key (no_pol)
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->first();

        // Redirect if the vehicle is not found
        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($no_pol)
    {
        // Fetching the vehicle by its primary key (no_pol)
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->first();

        // Redirect if the vehicle is not found
        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol)
    {
        $request->validate([
            'no_mesin' => 'required|max:15|unique:kendaraan,no_mesin,'.$no_pol.',no_pol', // Make sure no_mesin is unique except the current one
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        // Fetching the vehicle by its primary key (no_pol)
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->first();

        // Redirect if the vehicle is not found
        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        // Update the vehicle data
        $kendaraan->update([
            'no_mesin' => $request->no_mesin,
            'merek' => $request->merek,
            'warna' => $request->warna,
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan updated successfully.');
    }

    public function destroy($no_pol)
    {
        // Fetching the vehicle by its primary key (no_pol)
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->first();

        // Redirect if the vehicle is not found
        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }

        // Delete the vehicle
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan deleted successfully.');
    }
}