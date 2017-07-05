@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Contact Us
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="{!! asset('images/contact-us-banner.jpg') !!}" alt="Contact Us">
            </div>
            <!-- Login -->
            <div class="col-md-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif

                {!! Form::open(array('route' => 'contact', 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('E-mail') !!}
                    {!! Form::text('email', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Message') !!}
                    {!! Form::textarea('message', null,
                        array('required',
                              'class'=>'form-control',
                              'style'=>'height:100px',
                              'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Send',
                      array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}
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