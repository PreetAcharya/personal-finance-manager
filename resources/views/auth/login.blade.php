@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Log In
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="{!! asset('images/login-banner.jpg') !!}" alt="Log In">
            </div>
            <!-- Login -->
            <div class="col-md-4">
                @if (isset($success) && $success!=null)
                    <div class="alert alert-success">
                        {{ $success }}
                        <?php $success = null; ?>
                    </div>
                @endif
                @if (isset($err) && $err!=null)
                    <div class="alert alert-danger">
                        {{ $err }}
                        <?php $err = null; ?>
                    </div>
                @endif
                <form name="loginForm" id="loginForm" style="margin-top:20px" role="form" method="POST"
                      action="{{ url('/login') }}">
                    <!--Mandatory token! Do not touch!-->
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>
                                User Name:
                            </label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>
                                Password:
                            </label>

                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <!--<div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>-->

                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/resetpass') }}">
                        Forgot Your Password?
                    </a>
                </form>
            </div>
        </div>
    </div>



@endsection
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
</script>