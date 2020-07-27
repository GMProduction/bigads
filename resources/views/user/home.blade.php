@extends('base')
@section('content')

    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg.jpg">
        <div class="hero-slider owl-carousel">
            <div class="hs-item">
                <div class="hs-left"><img src="{{asset('webc/img/slider.png')}}" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">mulai dari Rp 10.000/ hari</div>
                        <h2><br>Iklan di web</h2>
                        {{--                    <a href="" class="site-btn">Shop NOW!</a>--}}
                    </div>
                </div>
            </div>
            <div class="hs-item">
                <div class="hs-left"><img src="{{asset('webc/img/slider.png')}}" alt=""></div>
                <div class="hs-right">
                    <div class="hs-content">
                        <div class="price">Pasti untung</div>
                        <h2><br>Banyak pilihan iklan web</h2>
                        {{--                    <a href="" class="site-btn">Shop NOW!</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Intro section -->
    {{--<section class="intro-section spad pb-0">--}}
    {{--    <div class="section-title">--}}
    {{--        <h2>pemium products</h2>--}}
    {{--        <p>We recommend</p>--}}
    {{--    </div>--}}
    {{--    <div class="intro-slider">--}}
    {{--        <ul class="slidee">--}}
    {{--            <li>--}}
    {{--                <div class="intro-item">--}}
    {{--                    <figure>--}}
    {{--                        <img src="{{asset('webc/img/intro/1.jpg')}}" alt="#">--}}
    {{--                    </figure>--}}
    {{--                    <div class="product-info">--}}
    {{--                        <h5>Pink Sunglasses</h5>--}}
    {{--                        <p>$319.50</p>--}}
    {{--                        <a href="#" class="site-btn btn-line">ADD TO CART</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <div class="intro-item">--}}
    {{--                    <figure>--}}
    {{--                        <img src="{{asset('webc/img/intro/1.jpg')}}img/intro/2.jpg" alt="#">--}}
    {{--                    </figure>--}}
    {{--                    <div class="product-info">--}}
    {{--                        <h5>Black Nighty</h5>--}}
    {{--                        <p>$319.50</p>--}}
    {{--                        <a href="#" class="site-btn btn-line">ADD TO CART</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <div class="intro-item">--}}
    {{--                    <figure>--}}
    {{--                        <img src="{{asset('webc/img/intro/3.jpg')}}" alt="#">--}}
    {{--                        <div class="bache">NEW</div>--}}
    {{--                    </figure>--}}
    {{--                    <div class="product-info">--}}
    {{--                        <h5>Yellow Sholder bag</h5>--}}
    {{--                        <p>$319.50</p>--}}
    {{--                        <a href="#" class="site-btn btn-line">ADD TO CART</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <div class="intro-item">--}}
    {{--                    <figure>--}}
    {{--                        <img src="{{asset('webc/img/intro/4.jpg')}}" alt="#">--}}
    {{--                    </figure>--}}
    {{--                    <div class="product-info">--}}
    {{--                        <h5>Yellow Sunglasses</h5>--}}
    {{--                        <p>$319.50</p>--}}
    {{--                        <a href="#" class="site-btn btn-line">ADD TO CART</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li>--}}
    {{--                <div class="intro-item">--}}
    {{--                    <figure>--}}
    {{--                        <img src="{{asset('webc/img/intro/5.jpg')}}" alt="#">--}}
    {{--                    </figure>--}}
    {{--                    <div class="product-info">--}}
    {{--                        <h5>Black Sholder bag</h5>--}}
    {{--                        <p>$319.50</p>--}}
    {{--                        <a href="#" class="site-btn btn-line">ADD TO CART</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </div>--}}
    {{--    <div class="container">--}}
    {{--        <div class="scrollbar">--}}
    {{--            <div class="handle">--}}
    {{--                <div class="mousearea"></div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
    <!-- Intro section end -->


    <!-- Featured section -->
{{--    <div class="featured-section spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="featured-item">--}}
{{--                        <img src="{{asset('webc/img/featured/featured-1.jpg')}} " alt="">--}}
{{--                        <a href="#" class="site-btn">see more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="featured-item mb-0">--}}
{{--                        <img src="{{asset('webc/img/featured/featured-2.jpg')}} " alt="">--}}
{{--                        <a href="#" class="site-btn">see more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Featured section end -->


    <!-- Product section -->
    <section class="product-section spad">
        <div class="container">
            <ul class="product-filter controls">
                <li class="control" data-filter=".new">Terbaru</li>
                <li class="control" data-filter="all">Termurah</li>
            </ul>
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
    </section>
    <!-- Product section end -->


    <!-- Blog section -->
{{--    <section class="blog-section spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="featured-item">--}}
{{--                        <img src="{{asset('webc/img/featured/featured-3.jpg')}}" alt="">--}}
{{--                        <a href="#" class="site-btn">see more</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7">--}}
{{--                    <h4 class="bgs-title">from the blog</h4>--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="bi-thumb">--}}
{{--                            <img src="{{asset('webc/img/blog-thumb/1.jpg')}} " alt="">--}}
{{--                        </div>--}}
{{--                        <div class="bi-content">--}}
{{--                            <h5>10 tips to dress like a queen</h5>--}}
{{--                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>--}}
{{--                            <a href="#" class="readmore">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="bi-thumb">--}}
{{--                            <img src="{{asset('webc/img/blog-thumb/2.jpg')}} " alt="">--}}
{{--                        </div>--}}
{{--                        <div class="bi-content">--}}
{{--                            <h5>Fashion Outlet products</h5>--}}
{{--                            <div class="bi-meta">July 02, 2018 | By Jessica Smith</div>--}}
{{--                            <a href="#" class="readmore">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="blog-item">--}}
{{--                        <div class="bi-thumb">--}}
{{--                            <img src="{{asset('webc/img/blog-thumb/3.jpg')}} " alt="">--}}
{{--                        </div>--}}
{{--                        <div class="bi-content">--}}
{{--                            <h5>the little black dress just for you</h5>--}}
{{--                            <div class="bi-meta">July 02, 2018 | By maria deloreen</div>--}}
{{--                            <a href="#" class="readmore">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Blog section end -->


@endsection

@section('script')


@endsection
