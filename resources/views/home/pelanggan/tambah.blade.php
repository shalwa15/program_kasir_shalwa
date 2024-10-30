@extends('layouts.master');
@section('tittle','pelanggan');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                            <div class="card-body">
                                <form action="/pelanggan/simpan" method="post">
                                    @csrf
                                   
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Alamat</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="alamat"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">No Tlp</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="no_tlp"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                                </div>
@endsection