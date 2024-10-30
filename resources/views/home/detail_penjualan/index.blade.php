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
                            <h3>Halaman Data Detail Penjualan</h3>
                            <a class="btn btn-primary" href="/detail_penjualan/{{$detail_penjualan}}/tambah">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>  
                                                <th scope="col">No</th>
                                                <th scope="col">Id Penjualan</th>
                                                <th scope="col">Id Produk</th>
                                                <th scope="col">Jumlah Produk</th>
                                                <th scope="col">Subtotal</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($detail_penjualan as $detail_penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $detail_penjualan->total_penjualan }}</td>
                                                <td>{{ $detail_penjualan->id_produk }}</td>
                                                <td>{{ $detail_penjualan->jumlah_produk }}</td>
                                                <td>{{ $detail_penjualan->subtotal }}</td>
                                        
                                                <td><a class="btn btn-warning" href="/detail_penjualan/{{ $detail_penjualan->id }}/show">Detail</a>
                                                    <a class="btn btn-danger" href="/detail_penjualan/{{ $detail_penjualan->id }}/delete"
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