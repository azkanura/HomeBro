@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">User Profile</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">Profile</li>
  </ol>
  <div class="page-header-actions">
    <a class="btn btn-success" href="{{route('profile')}}">
      <i class="icon fa fa-pencil" aria-hidden="true"></i> Edit Profile
    </a>
  </div>
</div>
@endsection
@section('content')
<div class="row page-profile-v2">
  <div class="col-lg-4 col-xl-4">
      <div class="user-info card card-shadow text-center">
        <div class="user-base card-block">
          <a class="avatar img-bordered avatar-100" href="javascript:void(0)">
            @if(isset($user->image) AND $user->image)
              <img src="{{$user->image}}" alt="...">
            @else
              <img src="{{asset('portraits/account.png')}}" alt="...">
            @endif
          </a>
          <h4 class="user-name">{{$user->name}}</h4>
          <p class="user-location">Aktif Sejak {{$user->created_at}}</p>
          <span class='badge badge-rounded badge-outline {{($user->role=='admin' ? 'badge-primary' : ($user->role=='officer' ? 'badge-success' : 'badge-warning' ))}}' style='text-transform:uppercase'>{{($user->role=='admin' ? 'Administrator' : ($user->role=='officer' ? 'Officer' : 'Customer Service' ))}}</span>
        </div>
        <hr>
        <div class="user-socials list-group list-group-full">
          <div class="list-group-item justify-content-center">
            <i class="icon fa fa-envelope"></i> {{$user->email}}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-xl-8">
      <div class='panel panel-bordered'>
          <div class='panel-heading'>
            <h3 class='panel-title'>Edit Profile</h3>
          </div>
          <div class='panel-body'>
            <form autocomplete="off">
              <div class="form-group">
                <label class="form-control-label" for="inputBasicEmail">Name</label>
                <input type="text" class="form-control" id="inputBasicEmail" name="inputEmail" placeholder="Email Address" autocomplete="off" value="{{$user->name}}">
              </div>
              <div class="form-group">
                <label class="form-control-label" for="inputBasicPassword">Email</label>
                <input type="email" class="form-control" id="inputBasicEmail" name="inputEmail" placeholder="Email Address" autocomplete="off" value="{{$user->email}}">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </form>
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
