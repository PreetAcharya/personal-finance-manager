<?php
/**
 * Created by PhpStorm.
 * User: Preet Acharya
 * Date: 03-Dec-16
 * Time: 7:36 PM
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
                            Modify Debit
                        </h1>
                    </div>
                </div>
                <!-- write code here -->
                <div class="col-md-8">
                    <form name="debitForm" id="debitForm" style="margin-top:20px" role="form" method="POST"
                          action="{{ url('/editdebit',$debit->debitId) }}">
                        <!--Mandatory token! Do not touch!-->
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('debitAmount') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Amount:
                                </label>
                                <input id="debitAmount" type="number" step="any" class="form-control"
                                       name="debitAmount" value="{{ $debit->debitAmount }}"
                                       required autofocus>
                                @if ($errors->has('debitAmount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('debitAmount') }}</strong>
                                    </span>
                                @endif
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('debitName') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Description:
                                </label>
                                <input id="debitName" type="text" value="{{ $debit->debitName }}" class="form-control" name="debitName" required>
                                @if ($errors->has('debitName'))
                                    <span class="help-block">
                                                            <strong>{{ $errors->first('debitName') }}</strong>
                                                         </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('debitCategoryId') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Category:
                                </label>
                                <select id="debitCategoryId" type="text" class="form-control" name="debitCategoryId" required>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->categoryId }}" <?php if($cat->categoryId == $debit->debitCategoryId) { echo 'selected="selected"'; }?>>{{ $cat->categoryName }} </option>;
                                    @endforeach
                                </select>
                                @if ($errors->has('debitCategoryId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('debitCategoryId') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('debitDate') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Date:
                                </label>
                                <input id="debitDate" type="date" value="{{ $debit->debitDate }}" class="form-control" name="debitDate" required>
                                @if ($errors->has('debitDate'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('debitDate') }}</strong>
                                         </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" value="{!! Auth::user()->id !!}" name="debitUserId">
                        <button type="submit" class="btn btn-primary">
                            Modify Debit
                        </button>
                        <a href="{{ url('/debitgrid') }}"><< Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
