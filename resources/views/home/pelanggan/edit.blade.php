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
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a class="btn btn-warning" href="/pelanggan">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="/pelanggan/{{ $pelanggan->id }}/update" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_pelanggan"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                            value="{{old('nama_pelanggan', $pelanggan->nama_pelanggan) }}"
                                        />
                                        @error('nama_pelanggan')
                                        <div class="alert alert-danger at-2">
                                            {{$message}}
                                    </div>
                                        @enderror
                                        </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="alamat"
                                            value="{{old('alamat', $pelanggan->alamat) }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('alamat')
                                        <div class="alert alert-danger at-2">
                                            {{$message}}
                                    </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_tlp" class="form-label">No_Tlp</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="no_tlp"
                                            value="{{old('no_tlp', $pelanggan->no_tlp) }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        @error('no_tlp')
                                        <div class="alert alert-danger at-2">
                                            {{$message}}
                                    </div>
                                        @enderror
                                        </div>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </form>
                             </div>
                           </div>
                         </div>
                      </div>
                   </section>
                </div>

@endsection