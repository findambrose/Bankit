<div style="margin-top: 50px; width: 75%; " class="modal" id ="requestLoanModal">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Request Loan') }}
              </div>

              <div class="card-body">
                  <form method="POST" action="{{ route('requestLoan') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount To Borrow') }}</label>

                          <div class="col-md-6">
                              <input id="amount" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('amount')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Loan Purpose') }}</label>

                          <div class="col-md-6">
                              <input id="desc" type="text" class="form-control @error('email') is-invalid @enderror" name="desc" value="{{ old('desc') }}" required autocomplete="desc" autofocus>

                              @error('desc')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="period" class="col-md-4 col-form-label text-md-right">{{ __('Select Loan Period') }}</label>

                          <div class="col-md-6">
                              <select class="" name="period">
                                <option value=1>7 Days</option>
                                <option value=2>14 Days</option>
                                <option value=3>21 Days</option>
                                <option value=4>1 Month</option>
                                <option value=8>2 Months</option>
                                <option value=12>3 Month</option>

                              </select>

                              @error('period')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Request Loan') }}
                              </button>

                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
