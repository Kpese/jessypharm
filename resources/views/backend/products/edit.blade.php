@extends('backend.layouts.app')

@section('content')

<section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Product</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('product.update', $products->slug) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="col-lg-6 col-sm-12">
                    <div class="col-12">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="description" class="form-control tinymce-editor">{{ $products->description }}</textarea>
                       @error('descripton')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>


                      <div class="col-12 mt-5">
                        <label class="form-label fw-bold">Composition</label>
                        <textarea name="composition" class="form-control tinymce-editor">{{ $products->composition }}</textarea>
                       @error('composition')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Product Name</label>
                        <input type="text" name="name" value="{{ $products->name }}" class="form-control">
                      </div>

                      <div class="col-12 mb-3">
                          <label class="form-label fw-bold">Product Image</label>
                          <input type="file" name="image" class="form-control">
                        <div class="mt-2">
                            @if($products->image)
                            <img src="{{ asset('products/'.$products->image) }}" width="50px" height="50px" alt="">
                            @endif
                        </div>
                        </div>

                        <div class="col-12 mb-3">
                          <label for="inputNanme4" class="form-label fw-bold">Dosage</label>
                          <input type="text" value="{{ $products->dosage }}" name="dosage" class="form-control">
                        </div>

                        <div class="col-12 mb-3">
                          <label class="form-label fw-bold">Storage/Handling Recommendations</label>
                          <input type="text" name="storage" value="{{ $products->storage }}" class="form-control">
                        </div>
                </div>


              <div class="col-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-md">Update Product</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
