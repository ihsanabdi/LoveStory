<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  = Google Fonts =  -->
    <script type="text/javascript">
        WebFontConfig = {
            google : {
                families : ['Open+Sans:400,700,400italic,700italic:latin,latin-ext,cyrillic', 'Pacifico::latin']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Twitter Bootstrap -->
    <link href="{{url('stylesheets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('stylesheets/responsive.css')}}" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="{{url('js/rs-plugin/css/settings.css')}}" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{url('js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css')}}" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="{{url('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css"/>
    <!-- main styles -->
        <link href="{{url('stylesheets/main.css')}}" rel="stylesheet">
    

    <!-- Modernizr -->
    <script src="{{url('js/modernizr.custom.56918.js')}}"></script>

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ url('images/logo.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('images/logo.ico') }}" type="image/x-icon">
  </head>

    <body class="">

    <div class="master-wrapper">
        <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="darker-row">
            <div class="container">
                <div class="row">
                    <div class="span1">
                        <div class="higher-line">
                            <img src="{{ url('images/logo.jpg') }}" width="100%">
                        </div>
                    </div>
                    <div class="span4">
                        <div class="higher-line">
                            <h2 style="margin-top: 25px;color: #BABABA"><i>A Great Family Starts Hear</i></h2>
                        </div>
                    </div>
                    <div class="span7">
                        <div class="topmost-line">
                            <div class="higher-line" style="margin-top: 25px">  
                            Wellcome! Please
                            <a href="#registerModal" role="button" data-toggle="modal">Register</a> or
                            <a href="#loginModal" role="button" data-toggle="modal">Login</a>
                            </div>
                            &nbsp;
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>

        <!--  ==========  -->
        <!--  = Main Menu / navbar =  -->
        <!--  ==========  -->
        <div class="navbar navbar-static-top" id="stickyNavbar">
          <div class="navbar-inner">
            <div class="container">
              <div class="row">
                <div class="span9">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                    <!--  ==========  -->
                    <!--  = Menu =  -->
                    <!--  ==========  -->
                    <div class="nav-collapse collapse">
                      <ul class="nav" id="mainNavigation">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ url('tentang-kami') }}">About</a></li>
                        <li><a href="{{ route('vendor') }}">Vendor</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('kontak') }}">Contact</a></li>
                      </ul>
                    </div><!-- /.nav-collapse -->
                </div>
                <!--  ==========  -->
                <!--  = Cart =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="cart-container" id="cartContainer">
                        <div class="cart">
                            <p class="items">CART <span class="dark-clr">({{Cart::count()}})</span></p>
                            <p class="dark-clr hidden-tablet">Rp.{{Cart::subtotal(2, ',', '.')}}</p>
                            <a href="{{ route('cart.index') }}" class="btn btn-warning">
                                <!-- <span class="icon icons-cart"></span> -->
                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="open-panel">
                            @php($keranjang = Cart::content())

                            @foreach($keranjang as $k)
                            <div class="item-in-cart clearfix">
                                <div class="image">
                                    <img src="{{ url('images/galeri-7.jpg') }}" width="124" height="124" alt="cart item" />
                                </div>
                                <div class="desc">
                                    <strong><a href="#">{{ $k->name }}</a></strong>
                                    <span class="light-clr qty">
                                        Qty: {{ $k->qty }}
                                        &nbsp;
                                        <a title="Remove Item" class="icon-remove-sign" href="{{route('cart.destroy', ['id'=>$k->rowId ])}}" onclick="event.preventDefault();
                                                 document.getElementById('remove-cart-{{$k->id}}').submit();"></a>
                                        <form id="remove-cart-{{$k->id}}" action="{{route('cart.destroy', ['id'=>$k->rowId ])}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </span>
                                </div>
                                <div class="price">
                                    <strong>Rp.{{number_format($k->price, 2, ',', '.')}}</strong>
                                </div>
                            </div>
                            @endforeach

                            <div class="summary">
                                <div class="line">
                                    <div class="row-fluid">
                                        <div class="span4">Subtotal:</div>
                                        <div class="span6 align-right size-16">Rp.{{Cart::subtotal(2, ',', '.')}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /cart -->
              </div>
            </div>
          </div>
        </div> <!-- /main menu -->
        
        @yield('Breadcrumbs')
        @yield('content')
        
        <!--  ==========  -->
        <!--  = Footer =  -->
        <!--  ==========  -->
        <footer>

            <!--  ==========  -->
            <!--  = Bottom Footer =  -->
            <!--  ==========  -->
            <div class="foot-last">
                <a href="#" id="toTheTop">
                    <span class="icon-chevron-up"></span>
                </a>
                <div class="container">
                    <div class="row">
                        <div class="span6" style="color: #fff">
                            &copy; Copyright 2017. Love Story.
                        </div>
                    </div>
                </div>
            </div> <!-- /bottom footer -->
        </footer> <!-- /footer -->

        <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->

    <!--  = Login =  -->
    <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="loginModalLabel"><span class="light">Login</span> Love Story</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmail">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputEmail" placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPassword">Password</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPassword" placeholder="Password" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                        </label>
                    </div>
                </div>
                
                <center><a href="{{route('home')}}" class="btn btn-warning higher bold">SIGN IN</a></center>
            </form>
            <p class="center-align push-down-0">
                <a data-toggle="modal" role="button" href="#forgotPassModal" data-dismiss="modal">Forgot your password?</a>
            </p>
        </div>
    </div>

    <!--  = Register =  -->
    <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="registerModalLabel"><span class="light">Register</span> Love Story</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                    <div class="controls">
                        <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPasswordRegister">Password</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Password" required>
                    </div>
                </div>
                
                <center><a href="{{route('home')}}" class="btn btn-warning higher bold">REGISTER</a></center>
            </form>
            <p class="center-align push-down-0">
                <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">Already Registered?</a>
            </p>

        </div>
    </div>

    <!--  = Forgot your password =  -->
    <div id="forgotPassModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="forgotPassModalLabel"><span class="light">Forgot</span> your password?</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">Username</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                    </div>
                </div>
                <p class="center-align">OR</p>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">Email</label>
                    <div class="controls">
                        <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                    </div>
                </div>
                <center><a href="{{route('home')}}" class="btn btn-warning higher bold">SEND ME A NEW PASSWORD</a>
            </form>
        </div>
    </div>

    </div> <!-- end of master-wrapper -->



    <!--  ==========  -->
    <!--  = JavaScript =  -->
    <!--  ==========  -->

    <!--  = jQuery - CDN with local fallback =  -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
    </script>

    <!--  = _ =  -->
    <script src="{{url('js/underscore/underscore-min.js')}}" type="text/javascript"></script>

    <!--  = Bootstrap =  -->
    <script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  = Slider Revolution =  -->
    <script src="{{url('js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>

    <!--  = CarouFredSel =  -->
    <script src="{{url('js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>

    <!--  = jQuery UI =  -->
    <script src="{{url('js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui-1.10.3/touch-fix.min.js')}}" type="text/javascript"></script>

    <!--  = Isotope =  -->
    <script src="{{url('js/isotope/jquery.isotope.min.js')}}" type="text/javascript"></script>

    <!--  = Tour =  -->
    <script src="{{url('js/bootstrap-tour/build/js/bootstrap-tour.min.js')}}" type="text/javascript"></script>

    <!--  = PrettyPhoto =  -->
    <script src="{{url('js/prettyphoto/js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>

    <!--  = Google Maps API =  -->
    {{-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{url('js/goMap/js/jquery.gomap-1.3.2.min.js')}}"></script> --}}
    
    {{-- SlimScroll --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    
    <!--  = Custom JS =  -->
    <script src="{{url('js/custom.js')}}" type="text/javascript"></script>

    {{-- Page Js --}}
    @stack('js')
  </body>
</html>


    