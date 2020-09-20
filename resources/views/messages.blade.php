@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Received Messages') }}</div>
                <div class="card-body">
                  @foreach($messages as $message)
                          <div class="">

                            <table class="table">

                                <tr>
                                  <!-- fields in th are bold by default td defines table data -->
                                  <th>Sender Name</th>
                                  <th>Message Content</th>
                                </tr>

                                <tr>
                                  <td>{{$message->name}}</td>
                                  <td>{{$message->msg_desc}}</td>

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
