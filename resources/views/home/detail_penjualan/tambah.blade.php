@extends('layouts.master');
@section('tittle','detail_penjualan');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah DataDetail Penjualan</h3>
                            <a class="btn btn-warning" href="/detail_penjualan">Kembali</a>
                            <div class="card-body">
                                <form action="/detail_penjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_penjualan" class="form-label">Id Penjualan</label>
                                        <input
                                            type="integer"
                                            class="form-control"
                                            name="id_penjualan"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted"></small>
                                    </div>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_produk" class="form-label">Id Produk</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="id_produk"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted"></small>
                                        @csrf
                                    <div class="mb-3">
                                        <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="jumlah_produk"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted"></small>
                                        @csrf
                                    <div class="mb-3">
                                        <label for="subtotal" class="form-label">Subtotal</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="subtotal"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted"></small>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                                </div>
@endsection