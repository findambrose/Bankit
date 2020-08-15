<div style="margin-top: 50px; width: 75%; " class="modal" id ="addNewSavingModal">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('New Saving') }}
              </div>

              <div class="card-body">
                  <form method="POST" action="{{ route('newSaving') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount To Save') }}</label>

                          <div class="col-md-6">
                              <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('amount')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Make Saving') }}
                              </button>

                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
