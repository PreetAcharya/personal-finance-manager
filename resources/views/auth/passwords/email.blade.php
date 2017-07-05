@extends('layouts.app')

<!-- Main Content -->
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <span style="color:green">Forgot Password?</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Sign Up -->
            <div class="col-md-4">
                <h4>Please Enter Your Email To Reset Your Password</h4>

                @if (isset($success) && $success!=null)
                    <div class="alert alert-success">
                        {{ $success }}
                        <?php $success = null; ?>
                    </div>
                @endif
                <form role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}


                    <div class="control-group form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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

                    <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                    </button>
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
