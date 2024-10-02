<div class="site-section bg-light" style="margin-top: 50px;">
    <div class="container">
        <div class="title-section text-center col-12">
            <h2 class="text-uppercase py-5 text-center fw-bold" style="font-size: 1.5rem; color: #2A8BCA">New Products</h2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">


                    @foreach ($products as $product)
                    <div class="card">
                        <div style="background-color: #eef1f4;">
                            <div class="p-3">
                                <span style="background-color: #2A8BCA; padding: 2px 10px; border-radius: 50px; color: white">available</span>
                            </div>
                            <img src="{{ asset('products/'.$product->image) }}" class="card-img-top p-2" alt="Product Image 1">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3"><a style="font-size:1.3rem; text-decoration: none; color:green" href="" class="card-title">{{ $product->name }}</a></h5>
                            <a href="" class="btn text-light" style="background-color: #2A8BCA">view product</a>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="text-center py-4">
            <a href="" class="btn text-light" style="background-color: #2A8BCA">View Our Products</a>
        </div>
    </div>
</div>
