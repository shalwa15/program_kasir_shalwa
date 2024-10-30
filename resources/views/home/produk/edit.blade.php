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
                            <h3>Halaman Edit Data Produk</h3>
                            <a class="btn btn-warning" href="/produk">Kembali</a>
                            <div class="card-body">
                                <form action="/produk/{{ $produk->id }}/update" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Gambar</label>
                                        <input 
                                            type="text"
                                            class="form-control"
                                            name="gambar"
                                            value="{{ $produk->gambar }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Produk</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_produk"
                                            value="{{ $produk->nama_produk }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Harga</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="harga"
                                            value="{{ $produk->harga }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Stok</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="stok"
                                            value="{{ $produk->stok }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                                </div>
@endsection