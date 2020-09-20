@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Loan Requests') }}</div>
                <div class="card-body">
                  @foreach($loanRequests as $loanRequest)
                          <div class="">

                            <table class="table">

                                <tr>
                                  <!-- fields in th are bold by default td defines table data -->
                                  <th>Users Name</th>
                                  <th>Loan Desc</th>
                                  <th>Amount Requested</th>

                                </tr>

                                <tr>
                                  <td>{{$loanRequest->name}}</td>
                                  <td>{{$loanRequest->description}}</td>
                                  <td>{{$loanRequest->amount}}</td>

                                </tr>

                          </table>



                          </div>

                      @endforeach

              </div>
              <div style="margin-top: 15px" class="success">

              </div>

            </div>
        </div>
    </div>
</div>
@endsection
