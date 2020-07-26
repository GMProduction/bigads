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
                        <a href="/mitra/tambahiklan" class="btn btn-md btn-neutral">Tambah Data</a>
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
                        <table class="table align-items-center table-flush">
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
                            <tr>

                                <td class="budget">
                                    1
                                </td>

                                <td class="budget">
                                    Facebook Banner
                                </td>
                                <td class="budget">
                                    Facebook.com
                                </td>
                                <td class="budget">
                                    banner
                                </td>
                                <td class="budget">
                                    @number(200000000000)
                                </td>
                                <td class="budget">
                                    600 x 300
                                </td>

                                <td class="budget">
                                    @money(50000)
                                </td>

                                <td class="budget">
                                    <a href="{{asset('assets/img/theme/bootstrap.jpg')}}"><img src="{{asset('assets/img/theme/bootstrap.jpg')}}" style="height: 75px; width: 75px; object-fit: cover"></a>
                                </td>

                                <td class="budget">
                                    <a> tayang / tolak</a>
                                </td>

                                <td>
                                    <a href="/mitra/tambahiklan" class="btn btn-sm btn-dribbble">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection