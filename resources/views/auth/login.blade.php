@extends('layouts.app')

@section('content')
<div class="container flex align-items-center justify-content-center full-page-height">
    <div class="row full-width justify-content-center">
        <div class="col-lg-10">
            <div class="login-form flex black white-background py-4">
                <div class="col-lg-6 justify-content-center px-4">
                    <div class="login-form-card flex justify-content-center align-items-center full-height bg-grad-red-orange">
                        <div class="text-nowrap white p-4">
                            <h3>Login here</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 justify-content-center p-4">
                    <div class="flex flex-column justify-content-center">
                        <div class="shapes-container row flex-nowrap mr-0">
                            <div class="big-green-circle"></div>
                            <div class="yellow-rectangle"></div>
                            <div class="small-light-green-circle"></div>
                        </div>

                        <div class="row justify-content-center">
                            <form method="POST" action="{{ route('login') }}">
                                <div class="container">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="user_name" class="col-form-label text-md-right">{{ __('Username') }}</label>
                                        </div>
                                        
                                        <div class="col-md-8 flex align-items-center">
                                            <input id="user_name" type="text" maxlength="20" class="text-input @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>
                                        </div>

                                        @error('user_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                        </div>

                                        <div class="col-md-8 flex align-items-center">
                                            <input id="password" type="password" class="text-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12 flex justify-content-center">
                                            <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="col-form-label text-md-left text-small" for="remember"> {{ __('Remember Me') }} </label>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mb-4">
                                        <button type="submit" class="btn orange-background px-4">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <div class="row justify-content-center">
                                        <a class="btn btn-link blue text-small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
