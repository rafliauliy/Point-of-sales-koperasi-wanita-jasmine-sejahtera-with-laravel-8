<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .header {
      text-align: center;
      padding: 20px;
    }
    .logo {
      max-width: 100px;
      height: auto;
    }
    .nama-koperasi {
      font-size: 24px;
      font-weight: bold;
      margin-top: 10px;
    }
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>
    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
<div class="header">
<div class="login-logo">
    <img src="../public/img/kopkal.jpg" alt="" width="100" height="100" margin-right="20">
    <div class="nama-koperasi">Koperasi Kemandirian Logistics</div>
    <div>Jl.Australia II , Warna sari, Kec.Citangkil, Kota.Cilegon, Banten. (42443) </div>
    <hr>
    </a>
  </div>
    <h2 class="text-center">Laporan Pendapatan</h2>
    <h4 class="text-center">
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>
    <table boder="1">
    <table class="table table-striped" cellpadding="10"> 
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $col)
                        <td>{{ $col }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>