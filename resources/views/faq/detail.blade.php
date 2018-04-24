@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">FAQ Detail</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/faqs')}}">FAQs</a></li>
    <li class="breadcrumb-item active">FAQ Detail</li>
  </ol>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-3 col-xl-3">
    <div class="card card-shadow">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{$faq->image}}">
      </div>
      <div class="user-base card-block">
        <h4 class="card-title">{{$faq->name}}</h4>
        <p class="card-text">Rp {{$faq->price}}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-6">
    <div class="card card-shadow">
      <div class="user-base card-block">
        <h4 class="card-title"><span class='badge badge-success'>{{$faq->category}}</span></h4>
        <p class="card-text">{{$faq->desc}}</p>
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
