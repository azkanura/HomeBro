
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Login to KitaPay</title>

    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
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
    <link rel="stylesheet" href="{{asset('vendor/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{asset('examples/css/pages/login-v2.css')}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

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
  </head>
  <body class="animsition page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <style>
      body {
        background: transparent;
      }
      .page-login-v2 .page-login-main{
        padding: 7vw 3vw;
      }
    </style>
    <!-- Page -->
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content">
        <div class="page-brand-info">
          <div class="brand">
            <img class="brand-img" src="{{asset('images/logo.png')}}" alt="...">
            <h2 class="brand-text font-size-40" style="text-transform:auto">KitaPay Admin Panel</h2>
          </div>
          <p class="font-size-20">Welcome to KitaPay Admin Panel. <br>You have to sign in to access KitaPay Admin Panel.</p>
        </div>

        <div class="page-login-main animation-slide-right animation-duration-1">
          <div class="brand hidden-md-up">
            <img class="brand-img" src="{{asset('images/logo.png')}}" alt="...">
            <h3 class="brand-text font-size-40">KitaPay</h3>
          </div>
          <h3 class="font-size-24">Sign In</h3>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

          <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
              <label class="sr-only" for="inputEmail">Email</label>
              <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="inputEmail" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group">
              <label class="sr-only" for="inputPassword">Password</label>
              <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="inputPassword" name="password" required
                placeholder="Password">
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="rememberMe">Remember me</label>
              </div>
              <!-- <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a> -->
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>

          <!-- <p>No account? <a href="{{ route('register') }}">Sign Up</a></p> -->
        </div>

      </div>
    </div>
    <!-- End Page -->


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
        <script src="{{asset('vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

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
        <script src="{{asset('js/Plugin/jquery-placeholder.js')}}"></script>

    <script>
      (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
