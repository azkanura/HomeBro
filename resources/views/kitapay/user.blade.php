@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">User Detail</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/kitapay/users/1')}}">KitaPay Users</a></li>
    <li class="breadcrumb-item active">User Detail</li>
  </ol>
  <div class="page-header-actions">

    @if(isset($user->transaction_enable) AND $user->transaction_enable)
    <a class="btn btn btn-danger" href="{{url('kitapay/user/disable-transaction')}}/{{$user->uid}}">
      <i class="icon fa fa-close" aria-hidden="true"></i> Disable Transaction
    </a>
    @else
    <a class="btn btn-success" href="{{url('kitapay/user/enable-transaction')}}/{{$user->uid}}">
      <i class="icon fa fa-check" aria-hidden="true"></i> Enable Transaction
    </a>
    @endif
  </div>
</div>
@endsection
@section('content')
<div class="row page-profile-v2">
  <div class="col-lg-4 col-xl-4">
      <div class="user-info card card-shadow text-center">
        <div class="user-base card-block">
          <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
            @if(isset($user->avatar))
              <img src="{{$user->avatar}}" alt="...">
            @else
              <img src="{{asset('portraits/account.png')}}" alt="...">
            @endif
          </a>
          <h4 class="user-name">{{$user->first_name}} {{$user->last_name}}</h4>
          <p class="user-job">{{($user->gender=='male'?'Pria':'Wanita')}},
            @if(isset($user->age_range) AND $user->age_range)
            {{$user->age_range}}
            @else
            -
            @endif
          </p>
          <p class="user-location">Aktif Sejak {{date('d M Y, H:i',(int)((int)$user->register_date/1000))}}</p>
          @if(isset($user->transaction_enable) AND $user->transaction_enable)
          <span class='badge badge-rounded badge-outline badge-primary' style='text-transform:uppercase'>Transaction Enabled</span>
          @else
          <span class='badge badge-rounded badge-outline badge-danger' style='text-transform:uppercase'>Transaction Disabled</span>
          @endif
        </div>
        <hr>
        <div class="user-socials list-group list-group-full">
          <div class="list-group-item justify-content-center">
            <i class="icon fa fa-envelope"></i> {{$user->email}}
          </div>
          <div class="list-group-item justify-content-center">
            <i class="icon fa fa-phone"></i> {{$user->phone}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-xl-4">

      <div class="card card-shadow card-inverse bg-blue-600 white">
        <div class="card-block p-30">
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-label mb-20">
              <div>TOTAL VOLUME TRANSAKSI</div>
            </div>
            <div class="counter-number-group mb-15">
              <span class="counter-number-related"></span>
              <span class="counter-number">{{$user->total_transaction_volume}}</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-shadow card-inverse bg-green-600 white">
        <div class="card-block p-30">
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-label mb-20">
              <div>TOTAL JUMLAH TRANSAKSI</div>
            </div>
            <div class="counter-number-group mb-15">
              <span class="counter-number-related">Rp </span>
              <span class="counter-number">{{$user->total_transaction_amount}}</span>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-lg-4 col-xl-4">
      <div class="card card-shadow card-inverse bg-purple-600 white">
        <div class="card-block p-30">
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-label mb-20">
              <div>SALDO KITASALDO</div>
            </div>
            <div class="counter-number-group mb-15">
              <span class="counter-number-related">Rp </span>
              <span class="counter-number">{{$user->kita_saldo_balance}}</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-shadow card-inverse bg-teal-600 white">
        <div class="card-block p-30">
          <div class="counter counter-md counter-inverse text-left">
            <div class="counter-label mb-20">
              <div>STATUS KITASALDO</div>
            </div>
            <div class="counter-number-group mb-15">
              <span class="counter-number-related"></span>
              <span class="counter-number" style='text-transform:Capitalize'>{{$user->kita_saldo_status}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<form method="POST" action="{{route('kitapay.update.status')}}">
  @csrf
<div class="row page-profile-v2" style='margin-top:-50px'>
  <div class="col-lg-4 col-xl-4"></div>
  <div class="col-lg-2 col-xl-2">
    <h5>Update KitaSaldo Status</h5>
  </div>
  <div class="col-lg-3 col-xl-3">
      <input type='hidden' value='{{$user->uid}}' name='id'>
      <select name='status' class='form-control' placeholder='select kitasaldo status'>
        @if($user->kita_saldo_status!='active')
        <option value='active'>Active</option>
        @endif
        @if($user->kita_saldo_status!='inactive')
        <option value='inactive'>Inactive</option>
        @endif
        @if($user->kita_saldo_status!='disable')
        <option value='disable'>Disable</option>
        @endif
      </select>
  </div>
  <div class="col-lg-3 col-xl-3">
      <button type='submit' class='btn btn-block btn-primary'>Update Status</button>
  </div>
</div>
</form>

@endsection
@section('style')
<link rel="stylesheet" href="{{asset('examples/css/pages/profile-v2.css')}}">
<!-- Fonts -->
<link rel="stylesheet" href="{{asset('fonts/font-awesome/font-awesome.css')}}">
@endsection
@section('script')
<script src="{{asset('examples/js/pages/profile-v2.js')}}"></script>
@endsection
