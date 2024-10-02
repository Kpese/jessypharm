@extends('backend.layouts.app')

@section('content')

<div class="pagetitle">
    <h1> Create Distributors</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">create Distributor</li>
      </ol>
    </nav>
  </div>


  <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                {{ session('success') }}
            @endif


            <form action="{{ route('distributor.create') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 ">
                        <div class="form-group">
                            <h4 class="card-title">Distributor Name</h4>
                            <div class="input-group col-xs-12">
                                <input type="text" name="name" class="form-control file-upload-info">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4 class="card-title">Distributor Address</h4>
                            <div class="input-group col-xs-12">
                                <input name="address" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <h4 class="card-title">Distributor Contact</h4>
                            <div class="input-group col-xs-12">
                                <input name="contact" class="form-control" type="text">
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
