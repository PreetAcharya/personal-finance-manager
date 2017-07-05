@extends('layouts.app')

<!-- Main Content -->
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span style="color:green">Reset Your Password Here : </span>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Sign Up -->
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
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/resetpass') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
                <h3>Click Here To <a href="{{ url('/login') }}">LOGIN</a></h3>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-7" style="margin-top:20px">
                <img class="img-responsive" src="{!! asset('images/login-banner.jpg') !!}" alt="Log In">
            </div>
        </div>


    </div>

@endsection
