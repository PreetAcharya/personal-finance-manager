@extends('layouts.inapp')
@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script>
        var cr_categories = <?php echo $cr_categories; ?>

        $(function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Credit Chart'
                },
                subtitle: {
                    text: 'Bar Charts for Your Credit Expenses'
                },
                xAxis: {
                    categories: cr_categories,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Expenses'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Credits',
                    data: <?php echo $cr_amount; ?>

                }]
            });
        });
    </script>

    <!-- Page Content -->

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Credit Charts

                        </h1>
                    </div>
                </div>
                <!-- write code here -->


                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto">
                </div>
            </div>
        </div>
    </div>

@endsection

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>