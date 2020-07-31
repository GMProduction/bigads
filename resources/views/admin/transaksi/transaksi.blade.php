@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Transaksi</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="dariLelang" class="form-control-label text-white">Dari</label>
                                    <input class="form-control" type="date" id="dariLelang" name="dariLelang">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="sampaiLelang" class="form-control-label text-white">Sampai</label>
                                    <input class="form-control" type="date" id="sampaiLelang" name="sampaiLelang">
                                </div>
                            </div>
                            <div class="col-lg-2 mt-auto mb-auto">
                                <a href="/admin/transaksi/cetak" class="btn btn-md btn-neutral">Cetak</a>
                            </div>
                        </div>
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
                                <th scope="col" class="sort" data-sort="budget">Nama Iklan</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal</th>
                                <th scope="col" class="sort" data-sort="status">Total</th>
                                <th scope="col" class="sort" data-sort="status">Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @forelse($transaksi as $t)
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
                                    <td>{{$t->payment[0] == null ? ($t->payment[0]->status == '0' ? 'Belum' : ($t->payment[0]->status == '1' ? 'Lunas' : 'Ditolak')) : ''}}</td>


                                    <td class="budget">
                                        {{$t->status}}
                                    </td>

                                    <td>
                                        <a href="/admin/transaksi/detailtransaksi/{{$t->id}}" class="btn btn-sm btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Belum ada transaksi</td>
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
