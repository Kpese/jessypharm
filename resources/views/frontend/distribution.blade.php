@extends('frontend.layouts.app')

@section('content')

<div class="container" style="margin-top:200px; margin-bottom: 200px">
    <h1 class="text-center mb-5 display-6 bold" style="font-weight:800;color: #2A8BCA">Our Distributors</h1>
<table class="table table-bordered" >
    <thead>
      <tr>
        <th scope="col" style="font-weight:600; font-size:1.2rem;color:#2A8BCA">#</th>
        <th scope="col" style="font-weight:600; font-size:1.2rem;color:#2A8BCA">Name</th>
        <th scope="col" style="font-weight:600; font-size:1.2rem;color:#2A8BCA">Address</th>
        <th scope="col" style="font-weight:600; font-size:1.2rem;color:#2A8BCA">Contact</th>
      </tr>
    </thead>
    <tbody>
      @foreach($distribute as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td style="font-size:1rem">{{$item->name}}</td>
            <td style="font-size:1rem">{{$item->address}}</td>
            <td style="font-size:1rem">{{$item->contact}}</td>
        </tr>
        @endforeach

    </tbody>
  </table>
  <div>
   {{ $distribute->links()}}
  </div>
</div>


 @endsection
