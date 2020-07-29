@extends('mitra.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Transaksi</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        {{--                        <a href="/mitra/tambahtransaksi" class="btn btn-md btn-neutral">Tambah Data</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Transaksi</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Pemesan</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Iklan</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Mulai</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Selesai</th>
                                <th scope="col" class="sort" data-sort="status">Status Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @forelse($transaksi as $t)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{$t->user->nama}}</td>
                                    <td>{{$t->produk->nama}}</td>
                                    <td>{{$t->tgl_mulai}}</td>
                                    <td>{{$t->tgl_selesai}}</td>
                                    <td>{{$t->payment->status == '0' ? 'Belum' : ($t->payment->status == '1' ? 'Lunas' : 'Ditolak')}}</td>
                                    <td class="budget">
                                        Belum di konfirmasi / menunggu tayang / sedang tayang / selesai
                                    </td>

                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Terima</a>
                                        <a href="" class="btn btn-sm btn-dribbble">Tolak</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada transaksi</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>

@endsection
