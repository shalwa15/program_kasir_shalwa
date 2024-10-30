@extends('layouts.master');
@section('tittle','user');
@section('content');

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                            <div class="card-body">
                                <form action="/user/{{ $user->id }}/update" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama User</label>
                                        <input 
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            value="{{ $user->name }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            value="{{ $user->email }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="pasword"
                                            value="{{ $user->password }}"
                                            id=""
                                            aria-describedby="helpid"
                                            placeholder=""
                                        />
                                        <small id="helpid" class="form-text text-muted">Help text</small>
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                                </div>
@endsection