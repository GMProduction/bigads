@extends('mitra.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Merubah Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Iklan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra/iklan">Data Iklan</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <input id="id" name="id" value="{{$iklan->id}}" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="namaweb">Nama Iklan</label>
                                            <input type="text" id="namaweb" name="namaweb" value="{{$iklan->nama}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="url">Url</label>
                                            <input type="text" id="url" name="url" value="{{$iklan->url}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <label for="jenisIklan">Jenis Iklan</label>
                                        <select class="form-control" id="jenisIklan" name="jenisIklan">
                                            <option value="Pop Up">Pop Up</option>
                                            <option value="Banner">Banner</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="trafic">Trafic (bulan)</label>
                                            <input type="number" id="trafic" name="trafic" value="{{$iklan->traffic}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="ukuran">Ukuran (pixel)</label>
                                            <input type="text" id="ukuran" name="ukuran" value="{{$iklan->ukuran}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="harga">Harga (hari)</label>
                                            <input type="number" id="harga" name="harga" value="{{$iklan->harga}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <img src="{{asset('uploads/iklan')}}/{{$iklan->images}}" height="200">
                                    </div>

                                    <div class="col-lg-6">
                                        <a>Screenshot</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="screenshot"
                                                   name="screenshot" lang="en">
                                            <label class="custom-file-label" for="screenshot">Select file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#jenisIklan').val('{{$iklan->jenis}}');
        $('#jenisIklan').formSelect();
    });
</script>

@endsection
