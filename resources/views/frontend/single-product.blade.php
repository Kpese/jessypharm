
@extends('frontend.layouts.app')

@section('content')

    <div class="bg-light py-3" style="margin-top: 150px; margin-bottom:80px">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a style="text-decoration: none" href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <a style="text-decoration: none"
              href="{{ route('product') }}">Store</a> <span class="mx-2 mb-0">/</span> <span style="font-weight: 500" class="text-black">{{ $product->name }}</span></div>
        </div>
      </div>
    </div>

    <div class="site-section text-dark" style="margin-bottom: 200px">
        <div class="container product-section">
            <div class="row">
              <!-- Product Image -->
              <div class="col-md-6">
                <div class="border text-center">
                    <img src="{{ asset('products/'.$product->image) }}" class="card-img-top p-2" alt="Product">
                </div>
              </div>

              <!-- Product Information -->
              <div class="col-md-6">
                <h2 class="mb-3 display-5" style="color:#2A8BCA">{{ $product->name }}</h2>

                <!-- Product Description -->
                <div class="mb-4">
                  <h5 class="fs-4" style="color:   #2A8BCA">Description:</h5>
                  <p>{!! $product->description !!}</p>
                </div>

                <!-- Product Composition -->
                <div class="mb-4">
                  <h5 class="fs-4" style="color:   #2A8BCA">Composition:</h5>
                 {!!   $product->composition !!}
                </div>

                <!-- Product Dosage -->
                <div class="mb-4">
                  <h5 class="fs-4" style="color:   #2A8BCA">Dosage:</h5>
                  {{ $product->dosage }}
                </div>

                <!-- Product Storage -->
                <div class="mb-4">
                  <h5 class="fs-4" style="color:   #2A8BCA">Storage:</h5>
                 {{$product->storage}}
                </div>

                <!-- Add to Cart or Back Button -->
                <div>
                  <a href="/product" class="btn btn-secondary">Back to Products</a>
                </div>
              </div>
            </div>
          </div>
    </div>


  @endsection
