@extends('layouts.inapp')
@section('content')

<!-- Page Content -->

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            DashBoard
                        </h1>
                    </div>
                </div>
                <!-- write code here -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <h2>CAD</h2>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        @foreach ($sum_debits as $debitsum)
                                            <div class="huge">{{ $debitsum->debitsum }}</div>
                                            <?php $totaldebits = $debitsum->debitsum ?>
                                        @endforeach
                                        <div><h3>Total Debits</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"><a href="{{ url('debitgrid') }}">View Details</a></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <h2>CAD</h2>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        @foreach ($sum_credits as $creditsum)
                                        <div class="huge">{{ $creditsum->creditsum }}</div>
                                        <?php $totalcredits = $creditsum->creditsum ?>
                                        @endforeach
                                        <div><h3>Total Credits</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"><a href="{{ url('creditgrid') }}">View Details</a></span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <h2>CAD</h2>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $totaldebits-$totalcredits; ?></div>
                                        <div><h3>Savings</h3></div>
                                    </div>
                                </div>
                            </div>
                            <a>
                                <div class="panel-footer">
                                    <span class="pull-left">Savings Now</span>
                                    <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>