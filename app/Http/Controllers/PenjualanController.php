<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pelanggan;


class   PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $penjualan = Penjualan::all();
       return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $pelanggan = Pelanggan::all();
       return view('home.penjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Penjualan::create([
        'tanggal_penjualan' => $request->tanggal_penjualan,
        'total_harga' => $request->total_harga,
        'id_pelanggan' => $request->id_pelanggan,
       ]);
       return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
