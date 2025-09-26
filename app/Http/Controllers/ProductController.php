<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    public function create()
    {
        return view('product.create'); // Pastikan folder sesuai
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('dataProduct')->with('success', 'Product berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_p' => 'required|string|max:100',
            'nama_p' => 'required|string|max:20',
            'kategori_p' => 'required|string|max:255',
            'harga_p' => 'required|string|max:15',
            'stok_p' => 'required|string|max:15', // Pastikan sama dengan DB
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'kode_p' => $request->kode_p,
            'nama_p' => $request->nama_p,
            'kategori_p' => $request->kategori_p,
            'harga_p' => $request->harga_p,
            'stok_p' => $request->stok_p,
        ]);

        return redirect()->route('dataProduct')->with('success', 'Product berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('dataProduct')->with('success', 'Product berhasil dihapus.');
    }
}
