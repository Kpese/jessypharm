@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Edit Blog</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </nav>
  </div>



  <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                {{ session('success') }}
            @endif


            <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="row">

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h4 class="card-title">Blog Image</h4>
                            <div class="input-group col-xs-12">
                                <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Partner's Image">
                            </div>
                            <div class="mt-3">
                                <img src="{{ asset('blogs/'. $blog->image) }}" width="100" height="100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4 class="card-title">Blog Title</h4>
                            <div class="input-group col-xs-12">
                                <input name="title" class="form-control" type="text" value="{{ $blog->title }}">
                            </div>
                        </div>
                    </div>


                        <div class="col-lg-12 mt-5">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Blog Description</h5>
                                <textarea class="tinymce-editor" name="description">{{ $blog->description }} </textarea>
                              </div>
                            </div>
                          </div>

                    <div class="col-md-8 mt-4">
                        <button type="submit" class="btn btn-primary btn-lg me-2">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

@endsection
