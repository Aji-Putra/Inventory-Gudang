@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Toko
                    </div>
                    <div class="card-body">
                        <form action="/toko/tambah" method="POST">
                            @csrf
                            <div class="form-group bm-3">
                                <label for="">Kode Toko</label>
                                <input type="text" class="form-control {{ ( $errors->has('kode_toko')) ? 'is-invalid' : '' }}" name="kode_toko" id="kode_toko" value="{{ old('kode_toko') }}" placeholder="Input Kode Toko">
                                @if ($errors->has('kode_toko'))
                                    <span class="error text-danger">{{ $errors->first('kode_toko') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Toko</label>
                                <input type="text" class="form-control {{ ( $errors->has('Nama_toko')) ? 'is-invalid' : '' }}" name="Nama_toko" id="Nama_toko" value="{{ old('Nama_toko') }}" placeholder="Input Nama Toko">
                                @if ($errors->has('Nama_toko'))
                                    <span class="error text-danger">{{ $errors->first('Nama_toko') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control {{ ( $errors->has('alamat')) ? 'is-invalid' : '' }}" name="alamat" id="alamat" value="{{ old('alamat') }}" placeholder="Input Alamat">
                                @if ($errors->has('alamat'))
                                    <span class="error text-danger">{{ $errors->first('alamat') }}</span>
                                @endif
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Kontak</label>
                                <input type="text" class="form-control {{ ( $errors->has('telepone_toko')) ? 'is-invalid' : '' }}" name="telepone_toko" id="telepone_toko" value="{{ old('telepone_toko') }}" placeholder="Input Kontak Toko">
                                @if ($errors->has('telepone_toko'))
                                    <span class="error text-danger">{{ $errors->first('telepone_toko') }}</span>
                                @endif
                            </div>
                            <a href="/data_toko" class="btn btn-primary btn-sm mt-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection