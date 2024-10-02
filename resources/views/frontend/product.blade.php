@extends('frontend.layouts.app')

@section('content')

<div style="margin-top: 30px"  class="empty-space col-xs-b55 col-sm-b95"></div>

<div class="mt-5 mb-5 relative Outerdiv" data-aos="zoom-out">
    <div class="simple-article large grey">
        <div class="overlay-title">
            <div class="h2 TitlePage mt-5"><b>Our products</b></div>
        </div>

        <img class="TitleImage" src="{{ asset('frontend/img/inners/products2.jpg') }}" alt="" style="object-position: 0 22%;" />
    </div>
    <div class="empty-space col-xs-b55 col-sm-b20"></div>
</div>

    <section class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="cards">
                    <div style="background-color: #eef1f4;">
                        <div class="p-3">
                            <span style="background-color: #fb923c; padding: 2px 10px; border-radius: 50px; color: rgb(0, 0, 0);">available</span>
                        </div>
                        <img src="{{ asset('products/'.$product->image) }}" class="card-img-top p-2" alt="Product Image 1">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3 mt-4"><a style="font-size:1.3rem; text-decoration: none; color:#fb923c" href="" class="card-title">{{ $product->name }}</a></h5>
                        <a href="{{ route('product.single', $product->slug) }}" class="btn text-light" style="background-color: #2A8BCA">view product</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


</div>

<div class="empty-space col-xs-b55 col-sm-b50" style="margin-top: 150px;"></div>

{{-- <div id=goTop class=goTop><i class="fa fa-chevron-up"></i></div> --}}


@endsection
