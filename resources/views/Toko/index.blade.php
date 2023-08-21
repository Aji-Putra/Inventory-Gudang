@extends('layouts.sidebar')

@section('conten')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
         <h3>Data Toko</h3>
          <a class="btn btn-primary btn-sm float-end" href="tambah_toko">Tambah Toko</a>
        </div>
       @if (session('message'))
       <div id="myAlert" class="alert alert-danger mx-5 mt-3">
          {{ session('message') }}
       </div>
       @elseif (session('success'))
       <div id="myAlert" class="alert alert-success mx-5 mt-3">
        {{ session('success') }}
       </div>
       @endif

        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table" id="table_id" >
                            <thead class="table-dark">
                              <tr>
                                <th>No</th>
                                <th>Kode Toko</th>
                                <th>Nama Toko</th>
                                <th>Alamat</th>
                                <th>Kontak Toko</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            @foreach ($toko as $index => $tk )
                            <tbody class="table-info">
                              <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    {{ $tk->kode_toko }}
                                </td>
                                <td>{{ $tk->Nama_toko }}</td>
                                <td>{{ $tk->alamat }}</td>
                                <td>{{ $tk->telepone_toko }}</td>
                                <td><a class="btn btn-danger btn-sm" href="/delete/{{ $tk->id }}" onclick="return confirm('apakah anda akan menghapus data ini')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg></a>
                                    <a class="btn btn-warning btn-sm" href="/toko/edit/{{ $tk->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></a>
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
    <script>
      // Menunggu selama 3 detik sebelum menghilangkan alert
      setTimeout(function() {
          var alert = document.getElementById('myAlert');
          alert.style.display = 'none';
      }, 3000);
   </script>
@endsection