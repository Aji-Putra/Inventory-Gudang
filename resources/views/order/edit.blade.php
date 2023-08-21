@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Update Orderan
                    </div>
                    <div class="card-body">
                        <form action="/order/update/{{ $order->id_order }}" method="POST">
                            @csrf
                          
                            <input type="hidden" name="id_order" id="id_order" value="{{ $order->id_order }}">
                            <div class="form-group bm-3">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control " name="tanggal" id="tanggal" value="{{ $order->tanggal }}" >
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Kode toko</label>
                                <input type="text" class="form-control " name="kode_toko" id="kode_toko" value="{{ $order->kode_toko }}" >
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control " name="nama_barang" id="nama_barang" value="{{ $order->nama_barang }}">
                            </div>
                            <div class="form-group bm-3">
                                <label for="">Jumlah</label>
                                <input type="text" class="form-control " name="jumlah_barang" id="jumlah_barang" value="{{ $order->jumlah_barang }}">
                            </div>
                            <input type="hidden" name="status" id="status" value="{{ $order->status }}">
                            <a href="/data_order" class="btn btn-primary btn-sm mt-2">Back</a>
                            <button type="submit" class="btn btn-primary btn-sm  mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection