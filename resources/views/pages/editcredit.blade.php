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
                            Modify Credit
                        </h1>
                    </div>
                </div>
                <!-- write code here -->
                <div class="col-md-8">
                    <form name="creditForm" id="creditForm" style="margin-top:20px" role="form" method="POST"
                          action="{{ url('/editcredit',$credit->creditId) }}">

                        <!--Mandatory token! Do not touch!-->
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('creditAmount') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Amount:
                                </label>
                                <input id="creditAmount" type="number" step="any" class="form-control"
                                       name="creditAmount" value="{{ $credit->creditAmount }}" required autofocus>
                                @if ($errors->has('creditAmount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('creditAmount') }}</strong>
                                    </span>
                                @endif
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('creditName') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Description:
                                </label>
                                <input id="creditName" type="text" class="form-control" value="{{ $credit->creditName }}" name="creditName" required>
                                @if ($errors->has('creditName'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('creditName') }}</strong>
                                         </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('creditCategoryId') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Category:
                                </label>
                                <select id="creditCategoryId" type="text" class="form-control" name="creditCategoryId" required>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->categoryId }}" <?php if($cat->categoryId == $credit->creditCategoryId) { echo 'selected="selected"'; }?>>{{ $cat->categoryName }} </option>;
                                    @endforeach
                                </select>
                                @if ($errors->has('creditCategoryId'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('creditCategoryId') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('creditDate') ? ' has-error' : '' }}">
                            <div class="controls">
                                <label>
                                    Date:
                                </label>
                                <input id="creditDate" type="date" value="{{ $credit->creditDate }}" class="form-control" name="creditDate" required>
                                @if ($errors->has('creditDate'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('creditDate') }}</strong>
                                         </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" value="{!! Auth::user()->id !!}" name="creditUserId">
                        <button type="submit" class="btn btn-primary">
                            Modify Credit
                        </button>
                        <a href="{{ url('/creditgrid') }}"><< Back</a>
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