<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{url('/css/app.css')}}" rel="stylesheet">

    <link href="{{url('/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/css/dataTables.tableTools.css')}}" rel="stylesheet">
    <link href="{{url('/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
   
     <link href="{{url('/css/font-awesome.css')}}" rel="stylesheet">
     <link href="{{url('/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
     <link href="{{url('/css/style.css')}}" rel="stylesheet">
     <link href="{{url('/css/ionicons.min.css')}}" rel="stylesheet">

    <link href="{{url('/css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{url('/css/sweetalert.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
     <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" style="background-color: #2c3e50; color: #ccc; border-bottom: 1px solid #34495e ">
                       Trucking Monitoring
                    </a>
                </li>

         
                <li>
                    <a style="border: 2px solid #ccc; margin: 10px;" href="{{url('/dashboard')}}">
                    <i class="ion-ios-speedometer-outline"></i>
                    Add Deploy
                    </a>
                </li>
                <li>
                    <a href="{{url('settings')}}">
                    <i class="ion-ios-gear-outline"></i>
                    Settings
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="ion-ios-copy-outline"></i>
                    Reports
                    </a>
                </li>
                <li>
                    <a href="{{url('users')}}">
                    <i class="ion-ios-people-outline"></i>
                    Users
                    </a>
                </li>

         


        
            </ul>

             <ul class="sidebar-nav-bottom">
             <li>
                  <a href="{{url('users')}}" class="ion-ios-person-outline" > Account</a>
             </li>

                <li>
                 
                
                  <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="ion-log-out" ></i> Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>


                </li>
             </ul>



        </div><!-- end side wrapper -->





              <nav class="navbar navbar-default navbar-static-top" style="padding: 5px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
              
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a>
                            {{ date('F d, Y', strtotime(Carbon\Carbon::now())) }}
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 60px;">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
    
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                    @yield('content')
            </div>
        </div>
     </div>   <!-- /#page-content-wrapper -->


    <!-- Scripts -->
    <script src="{{url('/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- datatables   -->  
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/js/responsive.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.columnFilter.js') }}"></script>
    <script src="{{ asset('/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jszip.min.js') }}"></script>
    <script src="{{ asset('/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>

   
    <script src="{{asset('/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
    <script>
       $(":file").filestyle({size: "sm", buttonName: "btn-primary", buttonBefore: true, buttonText: "Choose file"});
     </script>


    <script src="{{asset('/js/sweetalert.min.js')}}"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

         <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



    
</body>
</html>
