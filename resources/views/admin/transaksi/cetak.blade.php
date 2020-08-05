<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Transaksi</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" type="text/css">


</head>

<body>

<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
    }
</style>

<br>
<div style="width:100%">
    <h4 class="text-center">Laporan Transaksi</h4>
    <p class="text-center text-black-50">{{$awal}} - {{$akhir}}</p>
</div>
<br>
<br>

<table class="table table-striped">
    <tr>
        <th scope="col" class="sort" data-sort="name">#</th>
        <th scope="col" class="sort" data-sort="budget">Nama Iklan</th>
        <th scope="col" class="sort" data-sort="status">Tanggal</th>
        <th scope="col" class="sort" data-sort="status">Total</th>
        <th scope="col" class="sort" data-sort="status">Pembayaran</th>
        <th scope="col" class="sort" data-sort="status">Status</th>
    </tr>
    @foreach($transaksi as $t)
        <tr>
            <td class="budget">
                {{ $loop->index + 1}}
            </td>

            <td class="budget">
                {{$t->produk->nama}}
            </td>

            <td class="budget">
                {{$t->tgl_mulai}} - {{$t->tgl_akhir}}
            </td>
            <td class="budget text-right">
                Rp. {{number_format($t->harga,0,',','.')}}
            </td>
            <td>{{$t->payment[0]->status == '0' ? 'Belum' : ($t->payment[0]->status == '1' ? 'Lunas' : 'Ditolak')}}</td>


            <td class="budget">
                {{$t->status}}
            </td>


        </tr>
    @endforeach
</table>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(
        {{auth()->user()->username}}
        )</p>
</div>


<footer class="footer">
    @php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); @endphp
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :
        {{auth()->user()->username}}
    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: {{ $date->format('d F Y, H:i:s') }} </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
