@extends('mitra.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Iklan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Iklan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/mitra/iklan/tambahiklan" class="btn btn-md btn-neutral">Tambah Data</a>
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
                        <h3 class="mb-0">Tabel Iklan</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Iklan</th>
                                <th scope="col" class="sort" data-sort="status">URL</th>
                                <th scope="col" class="sort" data-sort="status">Jenis Iklan</th>
                                <th scope="col" class="sort" data-sort="completion">Trafic /bulan</th>
                                <th scope="col" class="sort" data-sort="completion">Ukuran (pixel)</th>
                                <th scope="col" class="sort" data-sort="completion">Harga (hari)</th>
                                <th scope="col" class="sort" data-sort="completion">gambar</th>
                                <th scope="col" class="sort" data-sort="completion">status</th>
                                <th scope="col" class="sort" data-sort="completion">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @forelse($iklan as $p)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->url}}</td>
                                    <td>{{$p->jenis}}</td>
                                    <td>{{$p->traffic}}</td>
                                    <td>{{$p->ukuran}}</td>
                                    <td>Rp. {{number_format($p->harga, 0,',','.')}}</td>
                                    <td class="budget">
                                        <a href="{{asset('uploads/iklan')}}/{{$p->images}}"><img src="{{asset('uploads/iklan')}}/{{$p->images}}"
                                                                                                   style="height: 75px; width: 75px; object-fit: cover"></a>
                                    </td>

                                    <td class="budget">
                                        <a> tayang / tolak</a>
                                    </td>

                                    <td>
                                        <a href="/mitra/iklan/editiklan/{{$p->id}}" class="btn btn-sm btn-dribbble">Edit</a>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="10">Belum ada produk</td>
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
