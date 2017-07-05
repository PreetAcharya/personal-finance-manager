<?php
/**
 * Created by PhpStorm.
 * User: Preet Acharya
 * Date: 03-Dec-16
 * Time: 12:31 PM
 */?>
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
                            Your Credits
                        </h1>
                    </div>
                </div>
                <!-- write code here -->
                <div class="col-md-8">
                    <h3><a href="{{ url('/credit') }}">Add New Credit</a> </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Credit Name</th>
                                <th>Credit Type</th>
                                <th>Amount</th>
                                <th>Credit Date</th>
                                <th colspan="2"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($credits as $data)
                            <tr>
                                <td>{{ $data->creditName }}</td>
                                <td>{{ $data->categoryName }}</td>
                                <td>{{ $data->creditAmount }}</td>
                                <td>{{ $data->creditDate }}</td>
                                <td><a href="{{ url('editcredit',$data->creditId) }}"> Modify </a></td>
                                <td><a href="{{ url('deletecredit',$data->creditId) }}"> Remove </a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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
