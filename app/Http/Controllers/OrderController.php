<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan order baru
    }

    public function show($id)
    {
        return view('orders.show');
    }

    public function edit($id)
    {
        return view('orders.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate order
    }

    public function destroy($id)
    {
        // Logika untuk menghapus order
    }
}