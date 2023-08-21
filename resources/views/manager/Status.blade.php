@extends('layouts.sidebar')

@section('conten')
<div class="container mt-5  opacity-100">
    <div class="card">
        <div class="card-header">
         <h3>Data Orderan Barang</h3>
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
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            @foreach ($order as $index => $order )
                            <tbody class="table-info">
                              <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $order->kode_toko }}
                                </td>
                                <td>{{ $order->nama_barang }}</td>
                                <td>{{ $order->jumlah_barang }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->tanggal }}</td>
                                <td>
                                    <form action="/updatestatus/{{ $order->id_order }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success"> Setujui</button>
                                    </form>
                                    <form action="/tolakorder/{{ $order->id_order }}" class="mt-2" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-sm btn-danger"> Tolak</button>
                                    </form>
                                </td>
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