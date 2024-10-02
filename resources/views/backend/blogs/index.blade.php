@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Blog</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </nav>
  </div>

  @include('sweetalert::alert')

  <section class="section">
    <div class="mb-3">
        <a href="{{ route('blog.create') }}" class="btn btn-primary">Create Blog</a>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Blog Image</th>
                                <th scope="col">Blog Description</th>
                                <th scope="col">Action</th>
                                <th scope="col">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    <img src="{{ asset('blogs/'.$blog->image) }}" width="70" height="70" alt="">
                                </td>
                                <td>{!! Str::limit($blog->description , 150, '...') !!}</td>
                                <td>
                                    <form action="{{ route('blog.delete', $blog->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <p><a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a></p>
                                        <button onclick="return confirm('Are you sure you want to delete this blog?')" class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
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
