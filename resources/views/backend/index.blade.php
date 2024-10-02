@extends('backend.layouts.app')

@section('content')


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @include('sweetalert::alert')

    <section class="section dashboard">
      <div class="row">
            <!-- Sales Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total Products</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>{{$product}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-lg-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total Blogs</h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>{{$blog}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-lg-4 col-md-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total Distributors</h5>
                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6>{{$distributor}}</h6>
                    </div>
                  </div>

                </div>

      </div>
    </section>

    @endsection
