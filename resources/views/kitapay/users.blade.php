@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">HomeBro Users</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">HomeBro Users</li>
  </ol>
  <div class="page-header-actions">
    <form method='POST' action="{{route('kitapay.search.user')}}">
      @csrf
      <div class="input-search input-search-dark">
        <i class="input-search-icon wb-search" aria-hidden="true"></i>
        <input type="text" class="form-control" name="search" placeholder="Search by phone...">
      </div>
    </form>
  </div>
</div>
@endsection
@section('content')
<!-- <div class="panel">
  <div class="panel-body">
    <table class="table table-bordered dataTable table-hover table-striped" cellspacing="0" data-plugin="dataTable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr class="gradeA">
          <td class='name'>{{$user->first_name}} {{$user->last_name}}</td>
          <td class='phone'>{{$user->phone}} <span style='display:none'>{{str_replace('+62','0',$user->phone)}}</span></td>
          <td class="actions">
            <a href="{{url('kitapay/user')}}/{{$user->uid}}" class="btn btn-sm btn-icon btn-success on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div> -->
<div class="row">
  @foreach($users as $user)
  <div class='col-md-3'>
    <div class="card">
      <div class="card-block">
        <h4 class="card-title">{{$user->first_name}} {{$user->last_name}}</h4>
        <p class="card-text">Phone: {{$user->phone}}</p>
        <a href="{{url('kitapay/user')}}/{{$user->uid}}" class="btn btn-sm btn-icon btn-success on-editing cancel-row"><i class="icon wb-eye" aria-hidden="true"></i>&nbsp;&nbsp;Detail</a>
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
          <a class="page-link" href="{{route('kitapay.users',['page'=>(int)$page-1])}}" aria-label="Previous">
            <span aria-hidden="true">«</span>
          </a>
        </li>
        <li class="active page-item"><span class="page-link">{{$page}} <span class="sr-only">(current)</span></span></li>
        <li class="{{count($users)<(int)$size?'disabled':''}} page-item">
          <a class="page-link" href="{{route('kitapay.users',['page'=>(int)$page+1])}}" aria-label="Next">
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
