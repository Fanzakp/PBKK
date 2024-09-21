<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar produk
        return view('products.index');
    }

    public function create()
    {
        // Logika untuk menampilkan form pembuatan produk
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan produk baru
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail produk
        return view('products.show');
    }

    public function edit($id)
    {
        // Logika untuk menampilkan form edit produk
        return view('products.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate produk
    }

    public function destroy($id)
    {
        // Logika untuk menghapus produk
    }
}