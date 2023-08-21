@extends('layouts.sidebar')

@section('conten')
<div class="container mt-5  opacity-100">
    <div class="card">
        <div class="card-header">
         <h3>Laporan Orderan Barang di Gudang Cv.Arka Group</h3>
         <a href="/printPDF" class="btn btn-sm btn-warning">Cetak Laporan PDF</a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table" id="table_id" >
                            <thead class="table-dark">
                              <tr>
                                <th>No</th>
                                <th>Kode Toko</th>
                                <th>Jumlah Barang</th>
                                <th>Status</th>
                                <th>Tanggal Order</th>
                              </tr>
                            </thead>
                            @foreach ($order as $index => $order )
                            <tbody>
                              <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $order->kode_toko }}
                                </td>
                                <td>{{ $order->jumlah_barang }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->tanggal }}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    
@endsection