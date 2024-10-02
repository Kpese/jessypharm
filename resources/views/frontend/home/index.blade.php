@extends('frontend.layouts.app')

@section('content')



<div style="margin-top: 40px"  class="empty-space col-xs-b55 col-sm-b95"></div>

<div class="top">
    <h1 style="color: #dcd9d9; line-height:1.5">Your Health First,<br> We CARE ALWAYS</h1>
</div>

<div class="p-4">
@include('frontend.home.about')

<div class="empty-space col-xs-b55 col-sm-b50" style="margin-top: 60px;"></div>

@include('frontend.home.accomplish')

<div class="empty-space col-xs-b55 col-sm-b50" style="margin-top: 60px;"></div>

@include('frontend.home.product')

<div style="padding-bottom: 10px; class=" empty-space col-xs-b55 col-sm-b95 mt-5"></div>

@include('frontend.home.testimonial')


<div class="empty-space col-xs-b55 col-sm-b50" style="margin-top: 150px;"></div>

</div>

@endsection
