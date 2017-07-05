@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    About Us
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="{!! asset('images/about-us-banner.jpg') !!}" alt="Log In">
            </div>
            <!-- Login -->

            <div class="col-sm-7">
                <br/>
                <b>
                <p> Banking and managing money keeps getting easier and easier.
                    In every list of the best Android apps and the best iPhone apps, you'll always find a few personal finance apps.
                    They are an essential component for managing modern life. </p>
                <p> Personal finance apps help us remember to pay bills, keep an eye on account balances, and stay within our budgets—things we need to do daily and for which we often need reminders.
                    Knowing how much money you have and how much you owe is where everyone should start, and that’s were Personal Finance Manager comes into the stage.</p>
                <p>  Because PFM has information about your financial accounts, the app knows exactly how much you're earning or paying on all your bills, credit cards, savings accounts and so on.
                    While not focused specifically on bill paying, this app is all about helping you to manage your money.</p>
                </b>
            </div>
            <div class="col-md-4" >
                <div class="inner">
                    <div class="inner">
                        <br/>
                        <p><b>Have questions? Contact us!</b></p>

                    </div>
                    <p><a href="{{ url('/contact') }}" class="btn btn-primary btn-lg" role="button">Contact us &raquo;</a>
                    </p></div>
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