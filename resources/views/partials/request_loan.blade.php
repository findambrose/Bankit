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
                          <label for="period" class="col-md-4 col-form-label text-md-right">{{ __('Select Loan Period') }}</label>

                          <div class="col-md-6">
                              <select class="" name="period">
                                <option value="7days">7 Days</option>
                                <option value="14days">14 Days</option>
                                <option value="21days">21 Days</option>
                                <option value="1month">1 Month</option>
                                <option value="2month">2 Months</option>
                                <option value="3month">3 Month</option>

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
