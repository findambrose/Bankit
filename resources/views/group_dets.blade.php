@extends('layouts.app')
@include('partials.request_loan')
@include('partials.pay_loan')
@include('partials.new_saving')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-primary" style="margin-right: 20px" type="button" data-toggle = "modal" data-target = "#addNewSavingModal" name="button">Add New Saving</button>
                    <button class="btn btn-primary" style="margin-right: 20px" type="button" data-toggle = "modal" data-target = "#requestLoanModal" name="button">Request Loan</button>
                    <button class="btn btn-primary" type="button" data-toggle = "modal" data-target = "#payLoanModal" name="button">Pay Loan</button>
                    <div class="success">
                      <p  style="margin-top: 20px">
                      {{Session::get('success')}}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
  @if($errors->has('email') || $errors->has('password'))
  <script type="text/javascript">
  //jQuery syntax. Query an html element then perfom some action on it
  //In this case check if condition, if true access jQuery, query the html element through selector and perform an action on it i.e the .modal()
  //The (function(){}) works like $(document.ready(fun(){}))
  $(function(){
    $('#requestLoanModal').modal(
      show: true;
    );
  });

  </script>
  @endif

@endsection
