@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">Voucher Detail</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/vouchers')}}">Vouchers</a></li>
    <li class="breadcrumb-item active">Voucher Detail</li>
  </ol>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-3 col-xl-3">
    <div class="card card-shadow">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{$voucher->image}}">
      </div>
      <div class="user-base card-block">
        <h4 class="card-title">{{$voucher->name}}</h4>
        <p class="card-text">Rp {{$voucher->value}}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-6">
    <div class="panel panel-bordered">
      <div class="panel-heading" id='requirementHeading'>
        <h3 class="panel-title">Detail</h3>
      </div>
      <div class="panel-body">
          @foreach($voucher as $key=>$value)
          @if($key!='id')
          <div class='row panel-content'>
            <div class='col-md-4' style='padding:15px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848;text-transform:uppercase'>
                {{$key}}
              </p>
            </div>
            <div class='col-md-8' style='padding:15px 45px 10px 30px'>
              @if($key!='image')
              {{$value}}
              @else
              <img src={{$value}} style='width:80%'>
              @endif
            </div>
          </div>
          @endif
          @endforeach
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
