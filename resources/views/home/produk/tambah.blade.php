@extends('layouts.master');
@section('tittle','produk');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Produk</h3>
                            <a class="btn btn-warning" href="/produk">Kembali</a>
                            <div class="card-body">
                                <form action="/produk/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gambar</label>
                                        <input 
                                            type="file"
                                            class="form-control"
                                            name="gambar"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                       @error('gambar')
                                       <div class="alert alert-danger mt-2"></div>
                                          {{$message}}
                                    </div>
                                       @enderror
                                      
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
                                        <label for="" class="form-label">Harga</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="harga"
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
                                        <label for="" class="form-label">Stok</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="stok"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('stok')
                                       <div class="alert alert-danger mt-2"></div>
                                          {{$message}}
                                       </div>
                                      
                                       @enderror
                                       
                                       </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                                </div>
@endsection