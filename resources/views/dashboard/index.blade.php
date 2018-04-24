@extends('base')
@section('header')
<div class="page-header">
  <h3 class="page-title">Dashboard</h3>
</div>
@endsection
@section('content')
<div class="row">
  <!-- First Row -->
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-warning">
          <i class="icon wb-chat-group"></i>
        </button>
        <span class="ml-15 font-weight-400">INTERACTIONS</span>
        <div class="content-text text-center mb-0">
          <i class="text-danger icon wb-triangle-up font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">32</span>
          <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-danger">
          <i class="icon wb-chat"></i>
        </button>
        <span class="ml-15 font-weight-400">AVERAGE INTERACTIONS PER USER</span>
        <div class="content-text text-center mb-0">
          <i class="text-success icon wb-triangle-down font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">5.33</span>
          <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-success">
          <i class="icon wb-chat-working"></i>
        </button>
        <span class="ml-15 font-weight-400">AVERAGE INTERACTION DURATION</span>
        <div class="content-text text-center mb-0">
          <i class="text-danger icon wb-triangle-up font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">5.6 minutes</span>
          <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-success">
          <i class="icon wb-chat-text"></i>
        </button>
        <span class="ml-15 font-weight-400">AVERAGE MESSAGES PER CONVERSATION</span>
        <div class="content-text text-center mb-0">
          <i class="text-danger icon wb-triangle-up font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">54</span>
          <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-danger">
          <i class="icon wb-envelope"></i>
        </button>
        <span class="ml-15 font-weight-400">AVERAGE MESSAGES PER CUSTOMER</span>
        <div class="content-text text-center mb-0">
          <i class="text-danger icon wb-triangle-up font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">36</span>
          <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6 info-panel">
    <div class="card card-shadow">
      <div class="card-block bg-white p-20">
        <button type="button" class="btn btn-floating btn-sm btn-primary">
          <i class="icon wb-envelope-open"></i>
        </button>
        <span class="ml-15 font-weight-400">AVERAGE ACTIONS PER CUSTOMER</span>
        <div class="content-text text-center mb-0">
          <i class="text-danger icon wb-triangle-up font-size-20">
      </i>
          <span class="font-size-40 font-weight-100">20</span>
          <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End First Row -->

  <!-- second Row -->
  <div class="col-12" id="ecommerceChartView">
    <div class="card card-shadow">
      <div class="card-header card-header-transparent py-20">
        <div class="btn-group dropdown">
          <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">NEW CUSTOMERS VS ACTIVE CUSTOMERS</a>
        </div>
        <ul class="nav nav-pills nav-pills-rounded chart-action">
          <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
        </ul>
      </div>
      <div class="widget-content tab-content bg-white p-20">
        <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
        <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
        <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
      </div>
    </div>
  </div>
  <!-- End Second Row -->

  <!-- Third Row -->
  <!-- Third Left -->
  <div class="col-lg-6" id="ecommerceRecentOrder">
    <div class="card card-shadow table-row">
      <div class="card-header card-header-transparent py-20">
        <div class="btn-group dropdown">
          <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">RECENT CHAT</a>
        </div>
      </div>
      <div class="card-block bg-white table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Customer</th>
              <th></th>
              <th>Last Active</th>
              <th>Platform</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style='width:60px'>
                <img style='width:40px' src="{{asset('portraits/account.png')}}"
                  alt="iMac" />
              </td>

              <td>Russell</td>
              <td>22/08/2018 08:00 AM</td>
              <td>
                <span class="badge badge-xl badge-success font-weight-100">Line</span>
              </td>

            </tr>
            <tr>
              <td>
                <img style='width:40px' src="{{asset('portraits/account.png')}}"
                  alt="iPhone" />
              </td>
              <td>Carol</td>
              <td>15/07/2018 08:00 AM</td>
              <td>
                <span class="badge badge-xl badge-success font-weight-100">Line</span>
              </td>

            </tr>
            <tr>
              <td>
                <img style='width:40px' src="{{asset('portraits/account.png')}}"
                  alt="apple_watch" />
              </td>
              <td>Austin Pena</td>
              <td>10/07/2018 08:00 AM</td>
              <td>
                <span class="badge badge-xl badge-success font-weight-100">Line</span>
              </td>

            </tr>
            <tr>
              <td>
                <img style='width:40px' src="{{asset('portraits/account.png')}}"
                  alt="mac_mouse" />
              </td>
              <td>Randy</td>
              <td>22/04/2018 08:00 AM</td>
              <td>
                <span class="badge badge-xl badge-success font-weight-100">Line</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- End Third Left -->

  <!-- Third Right -->
  <div class="col-lg-6" id="ecommerceRevenue">
    <div class="card card-shadow text-center pt-10">
      <h3 class="card-header card-header-transparent blue-grey-700 font-size-14 mt-0">REVENUE</h3>
      <div class="card-block bg-white">
        <div class="ct-chart barChart"></div>
        <div class="pie-view row">
          <div class="col-6 pie-left text-center">
            <h5 class="blue-grey-500 font-size-14 font-weight-100">GROS REVENUE</h5>
            <p class="font-size-20 blue-grey-700">
              Rp 114.786.000,00
            </p>
            <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
              data-valuemin="0" data-barcolor="#a57afa" data-size="100" data-barsize="4"
              data-goal="60" aria-valuenow="60" role="progressbar">
              <span class="pie-progress-number">60%</span>
            </div>
          </div>
          <div class="col-6 pie-right text-center">
            <h5 class="blue-grey-500 font-size-14 font-weight-100">NET REVENUE</h5>
            <p class="font-size-20 blue-grey-700">
              Rp 83.370.000,00
            </p>
            <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
              data-valuemin="0" data-barcolor="#28c0de" data-size="100" data-barsize="4"
              data-goal="78" aria-valuenow="78" role="progressbar">
              <span class="pie-progress-number">78%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Third Right -->
  <!-- End Third Row -->
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

<link rel="stylesheet" href="{{asset('vendor/chartist/chartist.css')}}">
<link rel="stylesheet" href="{{asset('vendor/aspieprogress/asPieProgress.css')}}">
<link rel="stylesheet" href="{{asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{asset('examples/css/dashboard/ecommerce.css')}}">


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

<script src="{{asset('vendor/chartist/chartist.min.js')}}"></script>
<script src="{{asset('vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
<script src="{{asset('vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>

<script src="{{asset('js/Plugin/aspieprogress.js')}}"></script>

<script src="{{asset('examples/js/dashboard/ecommerce.js')}}"></script>
@endsection
