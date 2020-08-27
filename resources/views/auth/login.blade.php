@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center d-flex">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">

                            <div class="form-group col">
                                <label for="email_or_mobile" class="col-form-label">{{ __('Mobile or Email or Username') }}</label>

                                <input id="mobile_or_email_or_username" type="text" class="form-control @error('mobile_or_email_or_username') is-invalid @enderror" name="mobile_or_email_or_username" value="{{ old('mobile_or_email_or_username') }}" required autocomplete="mobile_or_email_or_username" autofocus placeholder="Enter your mobile or email or username">

                                @error('mobile_or_email_or_username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">

                            <div class="form-group col">
                                <label for="email_or_mobile" class="col-form-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-outline-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-3 text-center">
                <div class="card-body">
                    Don't have an account? 
                    <a href="{{secure_asset('register')}}">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
