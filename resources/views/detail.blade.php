@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-7">
                <img src="{{asset('/images/uploads')}} / {{ $product->url }}"
                     style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3">{{ $product->nama }}</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0"><a href="{{ $product->url }}"
                                                                                            target="_blank">{{ $product->url }}</a>
                </p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0">Iklan {{ $product->jenis }}</p>
                <p style="font-size: 14px; font-weight: bold"
                   class="text-black-50 mb-0">{{ number_format($product->traffic, 0, ',', '.') }} kunjungan /bulan</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50">{{ $product->ukuran }}px</p>
                <p style="font-size: 20px; font-weight: bold" class="text-primary mb-4">
                    Rp. {{ number_format($product->harga, 0, ',', '.') }} /Hari</p>

                <a href="/cart/{{ $product->id }}" class="btn  btn-primary w-50">Pesan Sekarang</a>

            </div>
        </div>

        <div class="d-block bg-gradient-blue" style="height: 3px; width: 300px; margin-top: 50px">

        </div>

        <div class="text-left mt-2">
            <h2>Produk Kami</h2>
        </div>
    </section>

    <section class="container">
        <div class="row">
            @foreach($products as $v)
                <div class="col-3">
                    <div class="card" style="height: 350px">
                        <img class="card-img-top" src="{{asset('/images/uploads')}} / {{ $v->url }}" alt="Card image cap"
                             style="height: 150px; object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                            <h4 class="card-title text-primary mt-0 mb-1">
                                Rp. {{ number_format($v->harga, 0, ',', '.') }}/ hari</h4>
                            <p class="card-text text-sm text-black-50 mb-0">{{ $v->jenis }}</p>
                            <p class="card-text text-sm text-black-50">{{ $v->ukuran }}</p>
                            <a href="/product/{{ $v->id }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('script')

    <script>


        $(document).ready(function () {
            const minus = $('.quantity__minus');
            const plus = $('.quantity__plus');
            const input = $('.quantity__input');
            minus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                input.val(value);
            });

            plus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                value++;
                input.val(value);
            })
        });
    </script>
@endsection
