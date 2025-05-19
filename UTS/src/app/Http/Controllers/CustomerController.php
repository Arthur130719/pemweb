<?php

namespace App\Http\Controllers;

use App\Models\Customer; // Tambahkan ini untuk mengimpor model Customer
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Menampilkan form untuk menambahkan pelanggan baru
    public function create()
    {
        return view('customers.create');
    }

    // Menyimpan data pelanggan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data pelanggan
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // Memperbarui data pelanggan di database
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
            'phone' => 'nullable',
            'address' => 'nullable',
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil diperbarui.');
    }

    // Menghapus pelanggan dari database
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}
