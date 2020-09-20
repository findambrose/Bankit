<div style="margin-top: 50px; width: 75%; " class="modal" id ="payLoanModal">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Loan repayment') }}
              </div>

              <div class="card-body">
                  <form method="POST" action="{{ route('payLoan') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount To Pay') }}</label>

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
                          <label for="period" class="col-md-4 col-form-label text-md-right">

                          </label>

                          <div class="col-md-6">
                                <p>This loan, Loan ID: (ID from DB), was issued on (Date from DB)</p>

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
                                  {{ __('Pay Loan') }}
                              </button>

                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
