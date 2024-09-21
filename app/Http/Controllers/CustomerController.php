<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index');
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan customer baru
    }

    public function show($id)
    {
        return view('customers.show');
    }

    public function edit($id)
    {
        return view('customers.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate customer
    }

    public function destroy($id)
    {
        // Logika untuk menghapus customer
    }
}