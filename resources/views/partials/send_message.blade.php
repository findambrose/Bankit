<div style="margin-top: 50px; width: 75%; " class="modal" id ="sendMessageModal">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('New Message') }}
              </div>

              <div class="card-body">
                  <form method="POST" action="{{ route('sendMessage') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="period" class="col-md-4 col-form-label text-md-right">

                          </label>

                          <div class="col-md-6">
                                <p>This message will be sent the group admin</p>


                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Message Body') }}</label>

                          <div class="col-md-6">
                              <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autofocus>

                              @error('desc')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Send') }}
                              </button>

                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
