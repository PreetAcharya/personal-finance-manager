@extends('layouts.app')
@section('content')

    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url({{ URL::asset('images/banner1.jpg') }});"></div>
                <!--<div class="carousel-caption">
                    <h2>Personal Finance</h2>
                </div>-->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{ URL::asset('images/banner2.jpg') }});"></div>
                <!--<div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>-->
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{ URL::asset('images/banner3.jpg') }});"></div>
                <!--<div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>-->
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Personal Finance Manager
                </h1>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i> What is Personal Finance Manager?</h4>
                </div>
                <div class="panel-body">
                    <p>Personal Finance Manager is a smart assistant for planning your budget and expense control. With
                        a few clicks you can attach the expense or income, check your current balance, sum up all costs
                        including category and time period. The app also gives you a graphical overview of the
                        information, making it easier to plan larger purchases over the upcoming months. Your expenses
                        and incomes will be stored in one place making money management easy and no stress.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> How To Manage Your Funds?</h4>
                </div>
                <div class="panel-body">
                    <p>
                    <ol>
                        <li>Make a budget</li>
                        <ul>
                            <li>Keep track of your expenses</li>
                            <li>Be honest with yourself about your budget</li>
                            <li>Plan for unexpected</li>
                        </ul>
                        <li>Spend your money successfully</li>
                        <ul>
                            <li>When you can borrow/rent, don't buy</li>
                            <li>Spend what you have, not what you hope to make</li>
                        </ul>
                        <li>Make smart Investments</li>
                        <li>Build your savings</li>
                        <ul>
                            <li>Make savings a priority in your life</li>
                            <li>Start an emergency fund</li>
                        </ul>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-compass"></i> No Mistakes Anymore</h4>
                </div>
                <div class="panel-body">
                    <p>
                    <ul>
                        <li>Having only a rough idea in your head of where your money goes</li>
                        <li>Not preparing for non-monthly expenses</li>
                        <li>Spending more than you really need to</li>
                        <li>Not knowing your balance</li>
                        <li>Paying bills late</li>
                        <li>Not saving for emergencies</li>
                        <li>Using credit rather than cash</li>
                        <li>Not saving for retirement</li>
                        <li>Thinking only of the short term</li>
                        <li>Not doing research before shopping</li>

                    </ul>
                    </p>
                </div>
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