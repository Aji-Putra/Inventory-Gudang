@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Edit Toko
                    </div>
                    <div class="card-body">
                        <form action="/toko/update/{{ $toko->id }}" method="POST">

                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $toko->id }}">
                            <div class="form-group bm-3">
                                <label for="">Kode Toko</label>
                                <input type="text" class="form-control " name="kode_toko" id="kode_toko" value="{{ $toko->kode_toko }}" readonly>
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Toko</label>
                                <input type="text" class="form-control " name="Nama_toko" id="Nama_toko" value="{{ $toko->Nama_toko }}" >
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Stok Barang</label>
                                <input type="text" class="form-control " name="alamat" id="alamat" value="{{ $toko->alamat }}">
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Kontak Toko</label>
                                <input type="text" class="form-control " name="telepone_toko" id="telepone_toko" value="{{ $toko->telepone_toko }}">
                            </div>
                            <a href="/data_toko" class="btn btn-primary btn-sm mt-2">Back</a>
                            <button type="submit" class="btn btn-primary btn-sm  mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection