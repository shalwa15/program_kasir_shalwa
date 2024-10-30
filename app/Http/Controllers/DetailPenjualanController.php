<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPenjualan;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $detail_penjualan = DetailPenjualan::all();
       return view('home.detail_penjualan.index', compact('detail_penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.detail_penjualan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         DetailPenjualan::create([
             'id_penjualan' => $request->id_penjualan,
             'harga' => $request->harga,
             'qty' => $request->qty,
             'subtotal' => $request->subtotal,
         ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $detailpenjualan = DetailPenjualan::find($id);
      return view('home.detail_penjualan.edit', compact('detail_penjualan'));
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
        $detail_penjualan = DetailPenjualan::find($id);
        $detail_penjualan->update([        
             'id_penjualan' => $request->id_penjualan,
             'id_produk' => $request->id_produk,
             'jumlah_produk' => $request->jumlah_produk,
             'subtotal' => $request->subtotal,
        ]);
        return redirect('/detail_penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_barang, $nobon)
    {
        $detail_penjualan = DetailPenjualan::find($id);
        $detail_penjualan->delete();
        return redirect('/detail_penjualan');
    }
}
