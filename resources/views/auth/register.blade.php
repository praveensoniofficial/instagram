@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center d-flex">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">

                            <div class="form-group col">
                                <label for="email_or_mobile" class="col-form-label">{{ __('Mobile or email') }}</label>
                                <input id="email_or_mobile" type="text" class="form-control @error('email_or_mobile') is-invalid @enderror" name="email_or_mobile" value="{{ old('email_or_mobile') }}" required autocomplete="email_or_mobile" autofocus placeholder="Enter your mobile or email">

                                @error('email_or_mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col">
                                <label for="full_name" class="col-form-label">{{ __('Full Name') }}</label>
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus placeholder="Enter your full name">

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">

                            <div class="form-group col">
                                <label for="username" class="col-form-label">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Choose a username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">

                            <div class="form-group col">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Choose a password for login">

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
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-3 text-center">
                <div class="card-body">
                    Have an account? 
                    <a href="{{asset('login')}}">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
