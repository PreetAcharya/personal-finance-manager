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
                            Your Debits
                        </h1>
                    </div>
                </div>
                <!-- write code here -->
                <div class="col-md-8">
                    <h3><a href="{{ url('/debit') }}">Add New Debit</a> </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Debit Name</th>
                                <th>Debit Type</th>
                                <th>Amount</th>
                                <th>Debit Date</th>
                                <th colspan="2"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($debits as $data)
                                <tr>
                                    <td>{{ $data->debitName }}</td>
                                    <td>{{ $data->categoryName }}</td>
                                    <td>{{ $data->debitAmount }}</td>
                                    <td>{{ $data->debitDate }}</td>
                                    <td><a href="{{ url('/editdebit',$data->debitId) }}"> Modify </a></td>
                                    <td><a href="{{ url('/deletedebit',$data->debitId) }}"> Remove </a></td>
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
