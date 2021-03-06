@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">KitaUmroh registrations</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">KitaUmroh registrations</li>
  </ol>
  <div class="page-header-actions">
    <button class="btn btn-outline btn-primary" type="button">
      <i class="icon wb-plus" aria-hidden="true"></i> Add registration
    </button>
  </div>
</div>
@endsection
@section('content')

<div class="row">
  @foreach($registrations as $registration)
  <div class='col-md-4'>
    <div class="card">
      <div class="card-block">
        <h4 class="card-title" style='text-transform:capitalize'>{{$registration->package_id}} <span class="badge badge-md {{$registration->status=='no_transaction'?'badge-warning':'badge-success'}} float-right" style='text-transform:uppercase'>{{$registration->status=='no_transaction'?'No Transaction':''}}</span></h4>
        <p class="card-text">Created At: {{date('d M Y, H:i',(int)((int)$registration->creation_date/1000))}}</p>
        <a href="{{url('kitaumroh/registration')}}/{{$registration->transaction_id}}" class="btn btn-sm btn-icon btn-primary on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class='row'>
  <div class='col-md-12'>
    <nav>
      <ul class="pagination pagination-gap">
        <li class="{{$page==1||$page=='1'?'disabled':''}} page-item">
          <a class="page-link" href="{{route('kitaumroh.registrations',['page'=>(int)$page-1])}}" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="active page-item"><span class="page-link">{{$page}} <span class="sr-only">(current)</span></span></li>
        <li class="{{count($registrations)<(int)$size?'disabled':''}} page-item">
          <a class="page-link" href="{{route('kitaumroh.registrations',['page'=>(int)$page+1])}}" aria-label="Next">
            <span aria-hidden="true">»</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
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
