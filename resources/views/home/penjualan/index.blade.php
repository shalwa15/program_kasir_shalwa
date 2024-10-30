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
                            <h3>Halaman Data Penjualan</h3>
                            <a class="btn btn-primary" href="/penjualan/tambah">Tambah</a>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Tanggal Penjualan</th>
                                                <th scope="col">Total Harga</th>
                                                <th scope="col">Id Penjualan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $penjualan->tanggal_penjualan }}</td>
                                                <td>{{ $penjualan->total_harga }}</td>
                                                <td>{{ $penjualan->id_pelanggan }}</td>
                                                <td>  <td><a class="btn btn-warning" href="/pen+++++++++++++++++++++++++++++++++jualan/{{ $penjualan->id }}/show">Detail</a>
                                                    <a class="btn btn-danger" href="/penjualan/{{ $penjualan->id }}/delete"
                                                    onclick="return confirm('Yakin mau di hapus ?')">Struk</a>
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection