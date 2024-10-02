@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1> Edit Testimonys</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Edit testimony</li>
      </ol>
    </nav>
  </div>


  <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                {{ session('success') }}
            @endif


            <form action="{{ route('testimony.update', $testimony->id) }}" method="POST">
                @csrf
                @method('patch')

                <div class="row">

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h4 class="card-title">Testimony Name</h4>
                            <div class="input-group col-xs-12">
                                <input type="text" name="name" value="{{ $testimony->name }}" class="form-control file-upload-info">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        <h4 class="card-title">Testimony Description</h4>
                        <textarea name="description" class="form-control tinymce-editor">{{ $testimony->description }}</textarea>
                       @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
