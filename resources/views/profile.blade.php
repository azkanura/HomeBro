@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">User Profile</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">Profile</li>
  </ol>
  <div class="page-header-actions">
    <button class="btn btn-success" id='editProfileBtn'>
      <i class="icon fa fa-pencil" aria-hidden="true"></i> Edit Profile
    </button>
    <button class="btn btn-warning" id='changePasswordBtn'>
      <i class="icon fa fa-lock" aria-hidden="true"></i> Change Password
    </button>
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
              <img src="{{asset('storage')}}/{{$user->image}}" alt="...">
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
      <div class='panel panel-bordered' id='editProfile' style='display:none'>
          <div class='panel-heading'>
            <h3 class='panel-title'>Edit Profile</h3>
          </div>
          <div class='panel-body' style='padding-top:15px;padding-bottom:15px;'>
            <form method="post" action="{{route('edit.profile')}}" enctype="multipart/form-data">
              @csrf
              <input type='hidden' name='id' value="{{$user->id}}">
              <div class="form-group">
                <label class="form-control-label" for="name">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Input name here" autocomplete="off" value="{{$user->name}}" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address" autocomplete="off" value="{{$user->email}}" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="email">Profile Image</label>
                <input type="file" name="image" id="input-file-now-custom-1" data-plugin="dropify" data-default-file="{{$user->image ? asset('storage').'/'.$user->image : ''}}" data-allowed-file-extensions="png jpg jpeg" data-max-file-size="1M">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
      </div>

      <div class='panel panel-bordered' id='changePassword' style='display:none'>
          <div class='panel-heading'>
            <h3 class='panel-title'>Change Password</h3>
          </div>
          <div class='panel-body' style='padding-top:15px;padding-bottom:15px;'>
            <form method="post" action="{{route('change.password')}}" id='changePasswordForm'>
              @csrf
              <input type='hidden' name='id' value="{{$user->id}}">
              <div class="form-group">
                <label class="form-control-label" for="name">Old Password</label>
                <input type="password" class="form-control" id="oldPassword" name="old_password" placeholder="Input old password here" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="name">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="new_password" placeholder="Input new password here" required>
              </div>
              <div class="form-group">
                <label class="form-control-label" for="name">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirm_password" placeholder="Confirm new password here" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
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

<link rel="stylesheet" href="{{asset('vendor/blueimp-file-upload/jquery.fileupload.css')}}">
<link rel="stylesheet" href="{{asset('vendor/dropify/dropify.css')}}">

@endsection
@section('script')
<script src="{{asset('examples/js/forms/uploads.js')}}"></script>
<script src="{{asset('vendor/dropify/dropify.min.js')}}"></script>
<script src="{{asset('js/Plugin/dropify.js')}}"></script>
<script src="{{asset('examples/js/pages/profile-v2.js')}}"></script>
<script>
  $(function(){

    $('#editProfileBtn').on('click',function(){
      $(this).attr('disabled',true);
      $('#editProfile').show();
      $('#changePasswordBtn').attr('disabled',false);
      $('#changePassword').hide();
    });

    $('#changePasswordBtn').on('click',function(){
      $(this).attr('disabled',true);
      $('#editProfile').hide();
      $('#editProfileBtn').attr('disabled',false);
      $('#changePassword').show();
    });

    // $('input[type="file"]').on('change',function(){
    //     var ext=$(this).val().split('.');
    //     ext=ext[ext.length-1].toLowerCase();
    //     if(ext!='png' && ext!='jpg' && ext!='jpeg'){
    //         alert('You can only upload image file ( .jpg, .png, and .jpeg extension ) !');
    //         $(this).val('');
    //     }
    //     var maxSize = 1096880;
    //     var fileSize = this.files[0].size;
    //     if(fileSize>maxSize){
    //         alert('You cannot upload image with size more than 1 MB!');
    //         $(this).val('');
    //     }
    // });

    var password = document.getElementById("newPassword"), confirm_password = document.getElementById("confirmPassword");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("The password you entered doesn't match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

  });
</script>
@endsection
