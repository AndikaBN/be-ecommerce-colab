<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    // Mendapatkan semua transaksi
    public function index()
    {
        return Transaction::all();
    }

    // Mendapatkan transaksi berdasarkan ID
    public function show($id)
    {
        return Transaction::find($id);
    }

    // Membuat transaksi baru
    public function store(Request $request)
    {
        $transaction = Transaction::create($request->all());
        return response()->json($transaction, 201);
    }

    // Memperbarui transaksi berdasarkan ID
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return response()->json($transaction, 200);
    }

    // Menghapus transaksi berdasarkan ID
    public function delete($id)
    {
        Transaction::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
