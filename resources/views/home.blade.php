@extends('navbar')
@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider1.jpg')}}" alt="First slide"
                     style="height: 500px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider2.jpg')}}" alt="Second slide"
                     style="height: 500px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slider3.jpg')}}" alt="Third slide"
                     style="height: 500px; object-fit: cover">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="text-center mt-5">
        <h2 class="text-danger">Produk Kami</h2>
    </div>

    <div class="d-block bg-gradient-red mb-5 mr-auto ml-auto" style="height: 3px; width: 300px; margin-top: 20px">

    </div>
    <section class="container">
        <div class="row">
            @foreach($products as $v)
                <div class="col-3">
                    <div class="card" style="height: 350px">
                        <img class="card-img-top" src="{{asset('uploads/iklan')}}/{{$v->images}}" alt="Card image cap"
                             style="height: 150px; object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                            <h4 class="card-title text-primary mt-0 mb-1">Rp. {{ number_format($v->harga, 0, ',', '.') }}/ hari</h4>
                            <p class="card-text text-sm text-black-50" style="height: 50px; overflow: hidden"><a href="{{ $v->url }}"> {{ $v->url }}</a></p>
                            <a href="/product/{{ $v->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('script')


@endsection
