@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">User Detail</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{url('/kitapay/users/1')}}">Users</a></li>
    <li class="breadcrumb-item active">User Detail</li>
  </ol>
  <div class="page-header-actions">
    <a class="btn btn-primary" href="">
      <i class="icon fa fa-pencil" aria-hidden="true"></i> Edit Package
    </a>
  </div>
</div>
@endsection
@section('content')
<div class="row page-profile-v2">
  <div class="col-lg-4 col-xl-4">
    <div class="card">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{isset($package->image_url)?$package->image_url:asset('/photos/placeholder.png')}}">
        <span class="badge badge-lg {{$package->active?'badge-success':'badge-warning'}} float-right" style='position:absolute;top:10px;right:10px'>{{$package->active?'ACTIVE':'INACTIVE'}}</span>
      </div>
      <div class="card-block">
        <h4 class="card-title" style="margin-top:20px">{{$package->name}}</h4>
        <h5 class="card-title" style="margin-top:20px"><i class='fa fa-signal'></i>&nbsp; {{$package->rank}}</h5>
        <h5 class="card-title" style="margin-top:20px"><i class='fa fa-money'></i>&nbsp; {{$package->price_text}}</h5>
        <p class="card-text">{{$package->description}}</p>
        <!-- <a href="{{url('kitaumroh/package')}}/{{$package->package_id}}" class="btn btn-sm btn-icon btn-primary on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a> -->
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-xl-8 panel-group">
    <div class="panel panel-bordered">
      <div class="panel-heading" id='requirementHeading'>
        <a href='#requirementContent' class="panel-title collapsed" data-toggle='collapse' aria-controls="requirementContent"
        aria-expanded="false">REQUIREMENT</a>
      </div>
      <div class="panel-collapse collapse" id="requirementContent" aria-labelledby="requirementHeading" role="tabpanel">
        <div class="panel-body">
            @foreach($package->requirement as $key=>$value)
            <div class='row panel-content'>
              <div class='col-md-10' style='padding:15px 20px 10px 15px'>
                <p class="panel-text" style='font-weight:500;color:#484848'>
                  {{$key}}
                </p>
              </div>
              <div class='col-md-2' style='padding:15px 45px 10px 30px'>
                <img src='{{$value}}' style='width:20px;float:right'>
              </div>
            </div>
            @endforeach
        </div>
      </div>

    </div>

    <div class="panel panel-bordered">
      <div class="panel-heading" id='itineraryHeading'>
        <a href='#itineraryContent' class="panel-title collapsed" data-toggle='collapse' style="margin-top:20px" aria-controls="itineraryContent"
        aria-expanded="false">ITINERARY</a>
      </div>
      <div class="panel-collapse collapse" id="itineraryContent" aria-labelledby="itineraryHeading" role="tabpanel">
        <div class="panel-body">
            @foreach($itinerary as $key=>$value)
            <div class='row panel-content'>
              <div class='col-md-3' style='padding:10px 20px 10px 15px'>
                <p class="panel-text" style='font-weight:500;color:#484848'>
                  {{$key}}
                </p>
              </div>
              <div class='col-md-9' style='padding:10px 30px 10px 20px'>
                <p class="panel-text">{{$value}}</p>
              </div>
            </div>
            @endforeach
        </div>
      </div>

    </div>

    <div class="panel panel-bordered">
      <div class="panel-heading" id='accommodationIncludeHeading'>
        <a href='#accommodationIncludeContent' class="panel-title collapsed" data-toggle='collapse' style="margin-top:20px" aria-controls="accommodationIncludeContent"
        aria-expanded="false">INCLUDED ACCOMODATION</a>
      </div>
      <div class="panel-collapse collapse" id="accommodationIncludeContent" aria-labelledby="accommodationIncludeHeading" role="tabpanel">
        <div class="panel-body">
            @foreach($package->accommodation_include as $key=>$value)
            <div class='row panel-content'>
              <div class='col-md-10' style='padding:15px 20px 10px 15px'>
                <p class="panel-text" style='font-weight:500;color:#484848'>
                  {{$key}}
                </p>
              </div>
              <div class='col-md-2' style='padding:15px 45px 10px 30px'>
                <img src='{{$value}}' style='width:20px;float:right'>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>

    <div class="panel panel-bordered">
      <div class="panel-heading" id='accommodationExcludeHeading'>
        <a href='#accommodationExcludeContent' class="panel-title collapsed" data-toggle='collapse' style="margin-top:20px" aria-controls="accommodationExcludeContent"
        aria-expanded="false">EXCLUDED ACCOMODATION</a>
      </div>
      <div class="panel-collapse collapse" id="accommodationExcludeContent" aria-labelledby="accommodationExcludeHeading" role="tabpanel">
        <div class="panel-body">
            @foreach($package->accommodation_exclude as $key=>$value)
            <div class='row panel-content'>
              <div class='col-md-10' style='padding:15px 20px 10px 15px'>
                <p class="panel-text" style='font-weight:500;color:#484848'>
                  {{$key}}
                </p>
              </div>
              <div class='col-md-2' style='padding:15px 45px 10px 30px'>
                <img src='{{$value}}' style='width:20px;float:right'>
              </div>
            </div>
            @endforeach
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
