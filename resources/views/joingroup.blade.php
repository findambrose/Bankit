@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Choose a group and click "Join"') }}</div>
<div class="card-body">


              <form class="" action="{{route('assignGroup')}}" method="post">

                @csrf
                <div class="form-group row">
                    <label for="group-Select" class="col-md-4 col-form-label text-md-right">{{ __('Select Group') }}</label>

                    <div class="col-md-6">

                      <select class="" name="group_id">
                        <?php foreach ($groups as $group): ?>
                          <option value="{{$group->id}}">{{$group->name}}</option>
                        <?php endforeach; ?>

                      </select>

                        @error('group-Select')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Join
                        </button>
                    </div>
                </div>

              </form>

              </div>
              <div style="margin-top: 15px" class="success">
                <p >
                {{Session::get('success')}}</p>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection
