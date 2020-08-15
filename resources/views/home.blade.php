@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Account</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="group-members">
                      <h3 style="margin-bottom: 15px">Group Members</h3>
                    <ul>
                      @foreach($groupMembers as $groupMember)
                        <li>{{$groupMember->name}}</li>
                      @endforeach
                      <li></li>
                    </ul>
                    </div>


                    <button class="btn btn-primary" style="margin-right: 20px" type="button" onclick="window.location='{{route('joinGroup')}}'" name="button">Join a Group</button>
                    <button class="btn btn-primary" type="button" onclick="window.location='{{route('changeGroup')}}'" name="button">Change Group</button>

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
