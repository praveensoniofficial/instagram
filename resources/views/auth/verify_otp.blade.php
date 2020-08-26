@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center d-flex">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ action('Auth\LoginController@verify_otp') }}">
                        @csrf

                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="rounded-circle border border-success  d-flex align-items-center justify-content-center" style="width: 6em;height:6em;border-width: 3px !important;">
                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-lock text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="row  my-3">
                            <div class="col text-center" style="font-size:12px;">
                                Enter the code we sent to your number ending in 4389 .
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col">
                                <label for="email_or_mobile" class="col-form-label">{{ __('Security Code') }}</label>

                                <input id="mobile_or_email_or_username" type="text" class="form-control @error('mobile_or_email_or_username') is-invalid @enderror" name="mobile_or_email_or_username" value="{{ old('mobile_or_email_or_username') }}" required autocomplete="mobile_or_email_or_username" autofocus placeholder="Enter security code">

                                @error('mobile_or_email_or_username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-outline-primary btn-block">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>

                         <div class="row ">
                            <div class="col text-center" style="font-size:12px;">
                                Didn't get a security code? We can 
                                <a href="{{action('Auth\LoginController@verify_otp')}}">Resend it</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
