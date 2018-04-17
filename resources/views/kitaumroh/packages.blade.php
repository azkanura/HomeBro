@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">KitaUmroh Packages</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">KitaUmroh Packages</li>
  </ol>
  <div class="page-header-actions">
    <button class="btn btn-outline btn-primary" type="button">
      <i class="icon wb-plus" aria-hidden="true"></i> Add Package
    </button>
  </div>
</div>
@endsection
@section('content')

<div class="row">
  @foreach($packages as $package)
  <div class='col-md-3'>

    <div class="card">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{isset($package->image_url)?$package->image_url:asset('/photos/placeholder.png')}}">
        <span class="badge badge-md {{$package->active?'badge-success':'badge-warning'}} float-right" style='position:absolute;top:10px;right:10px'>{{$package->active?'ACTIVE':'INACTIVE'}}</span>
      </div>
      <div class="card-block">
        <h4 class="card-title">{{$package->name}}</h4>
        <p class="card-text"></p>
        <a href="{{url('kitaumroh/package')}}/{{$package->package_id}}" class="btn btn-sm btn-icon btn-primary on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('examples/css/tables/datatable.css')}}">
<!-- Fonts -->
<link rel="stylesheet" href="{{asset('fonts/font-awesome/font-awesome.css')}}">
@endsection
@section('script')
<script src="{{asset('vendor/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
<script src="{{asset('vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
<script src="{{asset('vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
<script src="{{asset('vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
<script src="{{asset('vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/buttons.print.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
<script src="{{asset('vendor/asrange/jquery-asRange.min.js')}}"></script>
<script src="{{asset('vendor/bootbox/bootbox.js')}}"></script>
<script src="{{asset('js/Plugin/datatables.js')}}"></script>

<script src="{{asset('examples/js/tables/datatable.js')}}"></script>
@endsection
