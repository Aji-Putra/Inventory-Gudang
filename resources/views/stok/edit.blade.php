@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Edit Barang
                    </div>
                    <div class="card-body">
                        <form action="/stok/update/{{ $barang->id_barang }}" method="POST">

                            @csrf
                            <input type="hidden" name="id_barang" id="id_barang" value="{{ $barang->id_barang }}">
                            <div class="form-group bm-3">
                                <label for="">Kode Barang</label>
                                <input type="text" class="form-control " name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}" >
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control " name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" >
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Stok Barang</label>
                                <input type="text" class="form-control " name="stok_barang" id="stok_barang" value="{{ $barang->stok_barang }}">
                            </div>
                            <a href="/data_barang" class="btn btn-primary btn-sm mt-2">Back</a>
                            <button type="submit" class="btn btn-primary btn-sm  mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection