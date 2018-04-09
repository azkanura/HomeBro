
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>KitaPay | Admin Dashboard</title>

    <link rel="apple-touch-icon" href="{{asset('images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-extend.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.min.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/slidepanel/slidePanel.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <style>
      .page-title{
        font-size:20px;
      }
      .page-header{
        padding:15px 30px;
      }
    </style>
    @yield('style')
    <!--[if lt IE 9]>
    <script src="{{asset('vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset('vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{asset('vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset('vendor/breakpoints/breakpoints.js')}}"></script>
    <script>
      Breakpoints();
    </script>
    <style>
      .site-menu-icon{
        font-size:14px;
      }
      .site-menu>.site-menu-item{
        font-size:14px;
      }
      .site-menu>.site-menu-item>a{
        padding:8px;
      }
    </style>
  </head>
  <body class="page-user">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse bg-indigo-600"
      role="navigation">

      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center">
          <img class="navbar-brand-logo" src="{{asset('images/logo.png')}}" title="KitaPay">
          <span class="navbar-brand-text hidden-xs-down"> KitaPay</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>

      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>

          </ul>
          <!-- End Navbar Toolbar -->

          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span style='font-size:20px;font-weight:100;padding-right:10px'>{{ Auth::user()->name }}</span>
                <span class="avatar avatar-online">
                  <img src="{{asset('portraits/account.png')}}" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="{{route('profile')}}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="{{route('logout')}}" role="menuitem" onclick="event.preventDefault();                   document.getElementById('logout-form').submit();"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar site-menubar-light">
      <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
          @if(Auth::user()->role=='admin')
          <li class="site-menu-item">
            <a href="{{url('/users')}}">
                <i class="site-menu-icon wb-users" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
            </a>
          </li>
          @endif
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-payment" aria-hidden="true"></i>
                <span class="site-menu-title">KitaPay</span>
            </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="{{url('/kitapay/users')}}">
                  <span class="site-menu-title">Users</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Transactions</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-globe" aria-hidden="true"></i>
                    <span class="site-menu-title">KitaUmroh</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Packages</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Add Package</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Registrations</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-check-circle" aria-hidden="true"></i>
                <span class="site-menu-title">KitaSaldo</span>
            </a>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-heart" aria-hidden="true"></i>
                    <span class="site-menu-title">KitaPeduli</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Donation Programs</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Add Donation Program</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Donation Transactions</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-mobile" aria-hidden="true"></i>
                    <span class="site-menu-title">KitaPulsa</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Products</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Add Product</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Topup Transactions</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-shopping-cart" aria-hidden="true"></i>
                    <span class="site-menu-title">KitaBayar</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Products</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Add Product</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">Transactions</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="site-menu-item">
            <a href="javascript:void(0)">
                <i class="site-menu-icon wb-arrow-right" aria-hidden="true"></i>
                <span class="site-menu-title">KitaTransfer</span>
            </a>
          </li>
          @if(!(Auth::user()->role=='customer_service'))
          <li class="site-menu-item has-sub">
            <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-graph-up" aria-hidden="true"></i>
                    <span class="site-menu-title">Daily Report</span>
                </a>
            <ul class="site-menu-sub">
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/menu-collapsed.html">
                  <span class="site-menu-title">Kita Saldo</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">KitaPeduli</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">KitaPulsa</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">KitaBayar</span>
                </a>
              </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="../layouts/grids.html">
                  <span class="site-menu-title">KitaTransfer</span>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      @yield('header')
      <div class="page-content">
           @yield('content')
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="/">KitaPay</a></div>
      <div class="site-footer-right">
        Crafted by <a href="http://idgw.net">Indonesia GW</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{asset('vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('vendor/slidepanel/jquery-slidePanel.js')}}"></script>
        <script src="{{asset('vendor/aspaginator/jquery-asPaginator.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{asset('js/Component.js')}}"></script>
    <script src="{{asset('js/Plugin.js')}}"></script>
    <script src="{{asset('js/Base.js')}}"></script>
    <script src="{{asset('js/Config.js')}}"></script>

    <script src="{{asset('js/Section/Menubar.js')}}"></script>
    <script src="{{asset('js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('js/Section/PageAside.js')}}"></script>
    <script src="{{asset('js/Plugin/menu.js')}}"></script>

    <!-- Config -->
    <script src="{{asset('js/config/colors.js')}}"></script>
    <script src="{{asset('js/config/tour.js')}}"></script>
    <script>Config.set('assets', '../../assets');</script>

    <!-- Page -->
    <script src="{{asset('js/Site.js')}}"></script>
    <script src="{{asset('js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('js/Plugin/switchery.js')}}"></script>
    <script src="{{asset('js/Plugin/aspaginator.js')}}"></script>
    <script src="{{asset('js/Plugin/responsive-tabs.js')}}"></script>
    <script src="{{asset('js/Plugin/tabs.js')}}"></script>

    <script>
      (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    @yield('script')
  </body>
</html>
