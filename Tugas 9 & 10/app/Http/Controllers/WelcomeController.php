<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('welcome', compact('categories'));
    }
    public function CreateTransaction(Request $request)
    {
        $this->validate($request, [
            'detail-kategori' => 'required',
            'detail-harga' => 'required',
            'detail-nama' => 'required',
            'detail-nomor' => 'required',
            'detail-alamat' => 'required',
            'status' => 'required',
        ]);
        Transaction::create([
            'nama' => $request->input('detail-nama'),
            'nomorhp' => $request->input('detail-nomor'),
            'alamat' => $request->input('detail-alamat'),
            'jenis' => $request->input('detail-kategori'),
            'harga' => $request->input('detail-harga'),
            'status' => $request->input('status'),
        ]);
        return redirect('/');
    }
}
