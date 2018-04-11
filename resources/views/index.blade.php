@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">Users</h3>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
  <div class="page-header-actions">
    <button id="addToTable" class="btn btn-outline btn-primary" type="button">
      <i class="icon wb-plus" aria-hidden="true"></i> Add User
    </button>
  </div>
</div>
@endsection
@section('content')
<div class="panel">
  <div class="panel-body">
    <form method="POST">
    @csrf
    <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
      <thead>
        <tr>
          <th style="visibility:hidden;position:absolute">Id</th>
          <th>Name</th>
          <th>Email</th>
          <th style="min-width:100px">Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          @if(Auth::user()->id!=$user->id)
          <tr class="gradeA" id={{$user->id}}>
            <td class='id' style="visibility:hidden;position:absolute">
              {{$user->id}}
            </td>
            <td class='name'>{{$user->name}}</td>
            <td class='email'>{{$user->email}}</td>
            <td class='select-role'>{{$user->role}}</td>
            <td class="actions">
              <button type='submit' formaction={{url('user/save')}} class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-check" aria-hidden="true"></i></button>
              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
            </td>
          </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </form>
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
