<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Personal Finance Manager') }}</title>


    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{!! asset('css/sb-admin.css') !!}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{!! asset('css/morris.css') !!}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <!-- My Custom CSS -->
    <link href="{!! asset('css/mycss.css') !!}" rel="stylesheet" type="text/css">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/dashboard') }}">Welcome - {{ Auth::user()->getFullName() }}</a>
            </div>
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->getUserName() }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if(Route::getCurrentRoute()->getPath() == 'dashboard') { echo 'class="active"'; }?>>
                        <a href="{{ url('/dashboard') }}">
                            <center>Home</center>
                        </a>
                    </li>
                    <li <?php if(Route::getCurrentRoute()->getPath() == 'creditgrid') { echo 'class="active"'; }?>>
                        <a href="{{ url('/creditgrid') }}">
                            <center>Credit</center>
                        </a>
                    </li>
                    <li <?php if(Route::getCurrentRoute()->getPath() == 'debitgrid') { echo 'class="active"'; }?>>
                        <a href="{{ url('/debitgrid') }}">
                            <center>Debit</center>
                        </a>
                    </li>
                    <li <?php if(Route::getCurrentRoute()->getPath() == 'charts') { echo 'class="active"'; }?>>
                        <a href="{{ url('/charts') }}"><center>Credit Charts</center></a>
                    </li>
                    <li <?php if(Route::getCurrentRoute()->getPath() == 'debitcharts') { echo 'class="active"'; }?>>
                        <a href="{{ url('/debitcharts') }}"><center>Debit Charts</center></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    @yield('content')
    @include('includes.footer')

</div>

<!-- Scripts -->



</body>
</html>
