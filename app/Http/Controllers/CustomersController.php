<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Customers::create($request->all());

        return redirect()->route('customers.index')
                         ->with('success', 'Customer berhasil dibuat.');
    }

    public function show($id)
    {
        $customer = Customers::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customers::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $customer = Customers::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')
                         ->with('success', 'Customer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')
                         ->with('success', 'Customer berhasil dihapus.');
    }
}