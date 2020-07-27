@extends('base')
@section('content')

    <!-- Page -->
    <div class="page-area product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <figure>
                        <img class="product-big-img" src="{{asset('webc/img/products/ss1.png')}}" alt="">
                    </figure>

                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>Banner Iklan Solopos</h2>
                        <div class="pc-meta">
                            <h4 class="price">Rp 400.000</h4>

                        </div>
                        <h6>Web</h6>
                        <p style="margin-bottom: 30px">solopos.com</p>

                        <h6>Trafic</h6>
                        <p style="margin-bottom: 30px">400.000 pengunjung /bulan</p>

                        <h6>Tanggal Mulai</h6>
                        <div class="form-group row" style="margin-top: 10px">
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>

                        <h6>Tanggal Ahkir</h6>
                        <div class="form-group row" style="margin-top: 10px">
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                            </div>
                        </div>

                        <a href="#" class="site-btn btn-line">Pesan Sekarang</a>
                    </div>
                </div>
            </div>

            <div style="height: 100px">

            </div>
            <div class="text-center rp-title" >
                <h5>Produk Lain</h5>
            </div>
            <div class="row" id="product-filter">

                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{asset('webc/img/products/ss1.png')}} " alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="{{asset('webc/img/icons/eye.png')}} " alt="">
                                    <p>Pesan</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="{{asset('webc/img/icons/heart.png')}} " alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Solopos</h6>
                            <p>Rp 400.000</p>
                            <a href="#" class="site-btn btn-line">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{asset('webc/img/products/ss1.png')}} " alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="{{asset('webc/img/icons/eye.png')}} " alt="">
                                    <p>Pesan</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="{{asset('webc/img/icons/heart.png')}} " alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Solopos</h6>
                            <p>Rp 400.000</p>
                            <a href="#" class="site-btn btn-line">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{asset('webc/img/products/ss1.png')}} " alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="{{asset('webc/img/icons/eye.png')}} " alt="">
                                    <p>Pesan</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="{{asset('webc/img/icons/heart.png')}} " alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Solopos</h6>
                            <p>Rp 400.000</p>
                            <a href="#" class="site-btn btn-line">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="mix col-lg-3 col-md-6 best">
                    <div class="product-item">
                        <figure>
                            <img src="{{asset('webc/img/products/ss1.png')}} " alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <img src="{{asset('webc/img/icons/eye.png')}} " alt="">
                                    <p>Pesan</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="{{asset('webc/img/icons/heart.png')}} " alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6>Solopos</h6>
                            <p>Rp 400.000</p>
                            <a href="#" class="site-btn btn-line">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Page end -->





@endsection

@section('script')


@endsection
