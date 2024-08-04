<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Barang; // Import model Barang jika diperlukan
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan daftar supplier
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    // Menampilkan form untuk membuat supplier baru
    public function create()
    {
        $barang = Barang::all(); // Ambil data barang untuk dropdown
        return view('supplier.create', compact('barang'));
    }

    // Menyimpan supplier baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string|max:15',
            'id_barang' => 'nullable|integer|exists:barang,id_barang',
        ]);

        Supplier::create($request->all());

        return redirect()->route('supplier.index')
                         ->with('success', 'Supplier created successfully.');
    }

    // Menampilkan detail supplier
    public function show(Supplier $supplier)
    {
        return view('supplier.show', compact('supplier'));
    }

    // Menampilkan form untuk mengedit supplier
    public function edit(Supplier $supplier)
    {
        $barang = Barang::all(); // Ambil data barang untuk dropdown
        return view('supplier.edit', compact('supplier', 'barang'));
    }

    // Mengupdate supplier di database
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string|max:15',
            'id_barang' => 'nullable|integer|exists:barang,id_barang',
        ]);

        $supplier->update($request->all());

        return redirect()->route('supplier.index')
                         ->with('success', 'Supplier updated successfully.');
    }

    // Menghapus supplier dari database
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index')
                         ->with('success', 'Supplier deleted successfully.');
    }
}