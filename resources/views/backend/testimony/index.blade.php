@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Testimony</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">testimony</li>
      </ol>
    </nav>
  </div>

  @include('sweetalert::alert')

  <section class="section">
    <div class="mb-3">
        <a href="{{ route('testimony.create') }}" class="btn btn-primary">Create testimony</a>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                                <th scope="col">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonys as $testimony)
                            <tr>
                                <td>{{ $testimony->name }}</td>
                                <td>{!! $testimony->description !!}</td>
                                <td>
                                    <form action="{{ route('testimony.delete', $testimony->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <p><a href="{{ route('testimony.edit', $testimony->id) }}" class="btn btn-primary">Edit</a></p>
                                        <button onclick="return confirm('Are you sure you want to delete this testimony?')" class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                                <td>{{ $testimony->created_at->diffForHumans() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
