@extends('layouts.master');
@section('tittle','penjualan');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Penjualan</h3>
                            <a class="btn btn-warning" href="/penjualan">Kembali</a>
                            <div class="card-body">
                                <form action="/penjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Tanggal Penjualan</label>
                                        <input 
                                            type="date"
                                            class="form-control"
                                            name="tanggal_penjualan"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Produk</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_produk"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('nama_produk')
                                       <div class="alert alert-danger mt-2"></div>
                                          {{$message}}
                                    </div>
                                       @enderror
                                      
                                       <div class="mb-3">
                                        <label for="" class="form-label">Total Harga</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="total_harga"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('harga')
                                       <div class="alert alert-danger mt-2"></div>
                                          {{$message}}
                                    </div>
                                       @enderror
                                
                                       <div class="mb-3">
                                        <label for="" class="form-label">Id Pelanggan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="id_pelanggan"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('harga')
                                       <div class="alert alert-danger mt-2"></div>
                                          {{$message}}
                                    </div>
                                       @enderror
                                       </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                                </div>
@endsection