@extends('base_chat')

@section('content')

<!-- Page -->
<div class="page">
  <!-- Message Sidebar -->
  <div class="page-aside">
    <div class="page-aside-switch">
      <i class="icon wb-chevron-left" aria-hidden="true"></i>
      <i class="icon wb-chevron-right" aria-hidden="true"></i>
    </div>
    <div class="page-aside-inner">
      <div class="input-search">
        <button class="input-search-btn" type="submit">
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
        <form>
          <input class="form-control" type="text" placeholder="Search Keyword" name="">
        </form>
      </div>

      <div class="app-message-list page-aside-scroll">
        <div data-role="container">
          <div data-role="content">
            <ul class="list-group">
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-online" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/1.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Kerem Sure</h5>
                    <span class="media-time">15 sec ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger">3</span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-online" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/2.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Eric hoffman</h5>
                    <span class="media-time">1 minutes ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-online" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/3.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Eddie Lobanovskiy</h5>
                    <span class="media-time">5 minutes ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-online" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/3.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Bill S Kenney</h5>
                    <span class="media-time">15 minutes ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger">5</span>
                  </div>
                </div>
              </li>
              <li class="list-group-item active">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-away" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/5.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Derek Bradley</h5>
                    <span class="media-time">40 minutes ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-away" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/6.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Mariusz Ciesla</h5>
                    <span class="media-time">2 hours ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-online" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/7.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Jesse Dodds</h5>
                    <span class="media-time">3 hours ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-off" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/8.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Gerren Lamson</h5>
                    <span class="media-time">3 hours ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-off" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/9.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Daniel Waldron</h5>
                    <span class="media-time">5 hours ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="pr-20">
                    <a class="avatar avatar-off" href="javascript:void(0)">
                      <img class="img-fluid" src="{{asset('portraits/10.jpg')}}"
                        alt="..."><i></i></a>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0 mb-5">Celikovic</h5>
                    <span class="media-time">7 hours ago</span>
                  </div>
                  <div class="pl-20">
                    <span class="badge badge-pill badge-danger"></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Message Sidebar -->
  <div class="page-main">
    <!-- Chat Box -->
    <div class="app-message-chats">
      <button type="button" id="historyBtn" class="btn btn-round btn-outline btn-default">History Messages</button>
      <div class="chats">
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
              <img src="{{asset('images/logo.png')}}" alt="June Lane">
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>
                Halo! Perkenalkan saya HomeBro. Saya akan membantu kamu
                mendapatkan keuntungan dari produk Pertamina. Silakan pilih
                menu di bawah ini untuk melanjutkan.


              </p>

            </div>
            <div class="chat-content">
              <p>

                Info SPBU - Belanja - Customer Service - Promo - My Account
              </p>

            </div>
          </div>
        </div>
        <div class="chat chat-left">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
              <img src="{{asset('portraits/5.jpg')}}" alt="Edward Fletcher">
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>
                Belanja
              </p>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
              <img src="{{asset('images/logo.png')}}" alt="June Lane">
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>
              Produk apa yang ingin kamu beli?
              </p>
            </div>
            <div class="chat-content">
              <p>
                Bright Gas - Food and Beverages - Oil - Others
              </p>

            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Chat Box -->

    <!-- Message Input-->
    <form class="app-message-input">
      <div class="message-input">
        <textarea class="form-control" rows="1"></textarea>
        <div class="message-input-actions btn-group">
          <button class="btn btn-pure btn-icon btn-default" type="button">
            <i class="icon wb-emoticon" aria-hidden="true"></i>
          </button>
          <button class="btn btn-pure btn-icon btn-default" type="button">
            <i class="icon wb-image" aria-hidden="true"></i>
          </button>
          <button class="btn btn-pure btn-icon btn-default" type="button">
            <i class="icon wb-paperclip" aria-hidden="true"></i>
          </button>
          <input id="messageImage" type="file" name="messageImage">
          <input id="messageFile" type="file" name="messageFile">
        </div>
      </div>
      <button class="message-input-btn btn btn-primary" type="button">SEND</button>
    </form>
    <!-- End Message Input-->

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
<link rel="stylesheet" href="{{asset('examples/css/apps/message.css')}}">
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
<script src="{{asset('js/Site.js')}}"></script>
<script src="{{asset('js/App/Message.js')}}"></script>

<script src="{{asset('examples/js/apps/message.js')}}"></script>
@endsection
