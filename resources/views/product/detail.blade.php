@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">Product Detail</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/products')}}">Products</a></li>
    <li class="breadcrumb-item active">Product Detail</li>
  </ol>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-3 col-xl-3">
    <div class="card card-shadow">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{$product->image}}">
      </div>
      <div class="user-base card-block">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">Rp {{$product->price}}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-6">
    <div class="card card-shadow">
      <div class="user-base card-block">
        <h4 class="card-title"><span class='badge badge-success'>{{$product->category}}</span></h4>
        <p class="card-text">{{$product->desc}}</p>
      </div>
    </div>
  </div>
</div>

@endsection
@section('style')
<link rel="stylesheet" href="{{asset('examples/css/pages/profile-v2.css')}}">
<!-- Fonts -->
<link rel="stylesheet" href="{{asset('fonts/font-awesome/font-awesome.css')}}">
@endsection
@section('script')
<script src="{{asset('examples/js/pages/profile-v2.js')}}"></script>
@endsection
