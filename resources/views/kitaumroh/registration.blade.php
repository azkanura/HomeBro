@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">Registration Detail </h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/kitaumroh/registrations/1')}}">Registrations</a></li>
    <li class="breadcrumb-item active">Registration Detail</li>
  </ol>
  <div class="page-header-actions">

  </div>
</div>

@endsection
<?php
  function month($number){
    switch($number){
      case 1: return 'Januari';
      case 2: return 'Februari';
      case 3: return 'Maret';
      case 4: return 'April';
      case 5: return 'Mei';
      case 6: return 'Juni';
      case 7: return 'Juli';
      case 8: return 'Agustus';
      case 9: return 'September';
      case 10: return 'Oktober';
      case 11: return 'November';
      case 12: return 'Desember';
      default: return '-';
    }
  }

?>
@section('content')

<div class="row page-profile-v2">
  <div class="col-lg-6 col-xl-6">
    <div class="user-info card card-shadow">
      <div class="user-base card-block">
        <h4 class="user-name">{{$registration->name}}</h4>
        <p class="user-location">Terdaftar sejak {{date('d M Y  H:i',(int)((int)$registration->creation_date/1000))}}</p>

        @if(isset($registration->status) AND $registration->status=='no_transaction')
        <span class='badge badge-rounded badge-outline badge-warning' style='text-transform:uppercase'>No Transaction</span>
        @else
        <span class='badge badge-rounded badge-outline badge-primary' style='text-transform:uppercase'>{{$registration->status}}</span>
        @endif
      </div>
      <hr>
      <div class="user-socials list-group list-group-full" style='padding:0 20px'>
        <div class="list-group-item justify-content-center">
          <i class="icon fa fa-briefcase"></i> {{$registration->profession?$registration->profession:'Tidak ada pekerjaan'}}
        </div>
        <div class="list-group-item justify-content-center">
          <i class="icon fa fa-group"></i> {{$registration->organization?$registration->organization:'Tidak ada organisasi'}}
        </div>
        <div class="list-group-item justify-content-center">
          <i class="icon fa fa-map-marker"></i> {{$registration->location_origin?$registration->location_origin:'Tidak ada lokasi'}}
        </div>
      </div>
    </div>
    <form method="POST" action="{{route('kitapay.update.status')}}">
      @csrf
      <div class="row" style='margin-top:-10px;margin-bottom:20px;z-index:9999'>
        <div class="col-lg-5 col-xl-5">
          <h5 style='text-align:right'>Update Registration Status</h5>
        </div>
        <div class="col-lg-4 col-xl-4">
          <input type='hidden' value='{{$registration->uid}}' name='id'>
          <select name='status' class='form-control' placeholder='select kitasaldo status'>
            <option value='active'>Active</option>
            <option value='inactive'>Inactive</option>
            <option value='disable'>Disable</option>
          </select>
        </div>
        <div class="col-lg-3 col-xl-3">
          <button type='submit' class='btn btn-block btn-primary'>Update</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-6 col-xl-6">
    <div class="panel panel-bordered">

      <div class="panel-body">
          <div class='row panel-content'>
            <div class='col-md-5' style='padding:10px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848'>
                <i class='fa fa-archive'></i>&nbsp;&nbsp;Jenis Paket
              </p>
            </div>
            <div class='col-md-7' style='padding:10px 30px 10px 20px'>
              <p class="panel-text" style='text-transform:capitalize'>{{$registration->package_id}}</p>
            </div>
          </div>

          <div class='row panel-content'>
            <div class='col-md-5' style='padding:10px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848'>
                <i class='fa fa-calendar'></i>&nbsp;&nbsp;Periode
              </p>
            </div>
            <div class='col-md-7' style='padding:10px 30px 10px 20px'>
              <p class="panel-text">{{month($registration->month)}}  {{$registration->year}}</p>
            </div>
          </div>

          <div class='row panel-content'>
            <div class='col-md-5' style='padding:10px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848'>
                <i class='fa fa-users'></i>&nbsp;&nbsp;Perkiraan Total Jamaah
              </p>
            </div>
            <div class='col-md-7' style='padding:10px 30px 10px 20px'>
              <p class="panel-text">{{$registration->total_jamaah_estimation}} orang</p>
            </div>
          </div>

          <div class='row panel-content'>
            <div class='col-md-5' style='padding:10px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848'>
                <i class='fa fa-phone'></i>&nbsp;&nbsp;Kontak
              </p>
            </div>
            <div class='col-md-7' style='padding:10px 30px 10px 20px'>
              <p class="panel-text">{{$registration->contact_person_phone}} ( {{$registration->contact_person_name}} )</p>
            </div>
          </div>

          <div class='row panel-content'>
            <div class='col-md-5' style='padding:10px 20px 10px 15px'>
              <p class="panel-text" style='font-weight:500;color:#484848'>
                <i class='fa fa-money'></i>&nbsp;&nbsp;Metode Pembayaran
              </p>
            </div>
            <div class='col-md-7' style='padding:10px 30px 10px 20px'>
              <p class="panel-text">{{$registration->payment_method}}</p>
            </div>
          </div>
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
