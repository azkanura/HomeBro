@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">FAQs</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">FAQs</li>
  </ol>
</div>
@endsection
@section('content')

<div class="row">
  @foreach($faqs as $faq)
  <div class='col-md-3'>
    <div class="card card-shadow">
      <div class="card-header card-header-transparent cover overlay" style='position:relative'>
        <img class="cover-image" src="{{$faq->image}}">
      </div>
      <div class="user-base card-block">
        <h4 class="card-title">{{$faq->name}}</h4>
        <p class="card-text">Rp {{$faq->price}}</p>
        <a href="{{url('faqs')}}/{{$faq->id}}" class="btn btn-sm btn-icon btn-success on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a>
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
