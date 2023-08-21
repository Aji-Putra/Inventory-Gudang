<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gudang') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <h2>Laporan Order di Gudang CV.Arka Group </h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Toko</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Status</th>
            <th scope="col">Tanggal Order</th>
          </tr>
        </thead>
        @foreach ($data as $index => $order )
            <tbody>
                <td>{{ $index + 1 }}</td>
                <td>{{ $order->kode_toko }}</td>
                <td>{{ $order->jumlah_barang }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->tanggal }}</td>
            </tbody>
        @endforeach
      </table>
</body>
<script>
    window.print()
</script>
</html>