@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Distributor</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">distributor</li>
      </ol>
    </nav>
  </div>

  @include('sweetalert::alert')

  <section class="section">
    <div class="mb-3">
        <a href="{{ route('distributor.create') }}" class="btn btn-primary">Create Distributors</a>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>
                                <th scope="col">Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($distributors as $distributor)
                            <tr>
                                <td>{{ $distributor->name }}</td>
                                <td>{{ $distributor->address }}</td>
                                <td>{{ $distributor->contact }}</td>
                                <td>
                                    <form action="{{ route('distributor.delete', $distributor->id) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <p><a href="{{ route('distributor.edit', $distributor->id) }}" class="btn btn-primary">Edit</a></p>
                                        <button onclick="return confirm('Are you sure you want to delete this distributor?')" class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                                <td>{{ $distributor->created_at->diffForHumans() }}</td>
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
