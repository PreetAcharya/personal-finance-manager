@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Registration Form
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Sign Up -->
            <div class="col-md-4">
                <form name="signupForm" id="signupForm" novalidate style="margin-top:20px" method="post"
                      action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>
                                First Name:
                            </label>
                            <input id="fname" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}"
                                   required autofocus>
                            @if ($errors->has('firstName'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>
                                Last Name:
                            </label>
                            <input id="lname" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}"
                                   required autofocus>
                            @if ($errors->has('lastName'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="controls">
                            <label>
                                Email:
                            </label>
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
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
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>
                                Confirm Password:
                            </label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </form>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-7" style="margin-top:20px">
                <img class="img-responsive" src="{!! asset('images/register-banner.jpg') !!}" alt="Sign Up">
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