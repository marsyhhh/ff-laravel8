@extends('layouts.app')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>{{ __('Register') }}</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="row">
                    <div class="form-group">
                      <label for="name">{{ __('Name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" data-indicator="pwindicator" name="password" required>
                      
                      @error('password')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="password-confirm" class="d-block">{{ __('Confirm Password') }}</label>
                      <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      {{ __('Register') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer text-center mb-4 mt-4">
              Copyright &copy; Skyline 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection