@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">product</li>
      </ol>
    </nav>
  </div>

  @include('sweetalert::alert')

  <section class="section">
    <div class="mb-3">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Create product</a>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Composition</th>
                                <th scope="col">Action</th>
                                <th scope="col">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img src="{{ asset('products/'.$product->image) }}" width="70" height="70" alt="">
                                </td>
                                <td>{!! $product->description !!}</td>
                                <td>
                                    <form action="{{ route('product.delete', $product->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <p><a href="{{ route('product.edit', $product->slug) }}" class="btn btn-primary">Edit</a></p>
                                        <button onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
