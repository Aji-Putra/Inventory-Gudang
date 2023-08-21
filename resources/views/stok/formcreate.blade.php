@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Barang
                    </div>
                    <div class="card-body">
                        <form action="/stok/tambah" method="POST">
                            @csrf
                            <div class="form-group bm-3">
                                <label for="">Kode Barang</label>
                                <input type="text" class="form-control {{ ( $errors->has('kode_barang')) ? 'is-invalid' : '' }}" name="kode_barang" id="kode_barang" value="{{ old('kode_barang') }}" placeholder="Input Kode Barang">
                                @if ($errors->has('kode_barang'))
                                    <span class="error text-danger">{{ $errors->first('kode_barang') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control {{ ( $errors->has('nama_barang')) ? 'is-invalid' : '' }}" name="nama_barang" id="nama_barang" value="{{ old('nama_barang') }}" placeholder="Input Nama Barang">
                                @if ($errors->has('nama_barang'))
                                <span class="error text-danger">{{ $errors->first('nama_barang') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Stok Barang</label>
                                <input type="text" class="form-control {{ ( $errors->has('stok_barang')) ? 'is-invalid' : '' }}" name="stok_barang" id="stok_barang" value="{{ old('stok_barang') }}" placeholder="Input Stok Barang">
                                @if ($errors->has('stok_barang'))
                                <span class="error text-danger">{{ $errors->first('stok_barang') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Rak</label>
                                <input type="text" class="form-control {{ ( $errors->has('RAK')) ? 'is-invalid' : '' }}" name="RAK" id="RAK" value="{{ old('RAK') }}" placeholder="Input RAK barang">
                                @if ($errors->has('RAK'))
                                <span class="error text-danger">{{ $errors->first('RAK') }}</span>
                                @endif
                            </div>
                            <a href="{{ route('indexstok') }}" class="btn-sm btn btn-primary mt-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection