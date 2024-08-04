<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;

class BarangController extends Controller
{
    /**
     * Menampilkan daftar barang.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Menampilkan form untuk membuat barang baru.
     */
    public function create()
    {
        // Jika ada kebutuhan untuk menampilkan supplier di form barang, Anda dapat menambahkannya di sini.
        // Saat ini, tabel barang tidak berhubungan langsung dengan supplier di form create.
        return view('barang.create');
    }

    /**
     * Menyimpan barang baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:150',
            'merek' => 'required|string|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string|max:10'
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail barang.
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    /**
     * Menampilkan form untuk mengedit barang.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Memperbarui barang yang ada.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:150',
            'merek' => 'required|string|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string|max:10'
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Menghapus barang.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}