@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Order Barang
                    </div>
                    <div class="card-body">
                        <form action="/order/tambah" method="POST">
                            @csrf
                            <div class="form-group bm-3">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control {{ ( $errors->has('tanggal')) ? 'is-invalid' : '' }}" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" placeholder="Input tanggal">
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Kode Toko</label>
                                <input type="text" class="form-control  {{ ( $errors->has('kode_toko')) ? 'is-invalid' : '' }}" name="kode_toko" id="kode_toko" value="{{ old('kode_toko') }}" placeholder="Input Kode Toko">
                                {{-- <select class="form-control" id="user_id" name="user_id">
                                    @foreach ($toko as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control {{ ( $errors->has('nama_barang')) ? 'is-invalid' : '' }}" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Input Nama Barang">
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Jumlah Barang</label>
                                <input type="text" class="form-control {{ ( $errors->has('jumlah_barang')) ? 'is-invalid' : '' }}" name="jumlah_barang" id="jumlah_barang" value="{{ old('jumlah_barang') }}" placeholder="Input jumlah barang">
                            </div>
                            <a href="/data_order" class="btn btn-sm btn-primary mt-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection