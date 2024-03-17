@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="ar_first_name" class="col-md-4 col-form-label text-md-end">{{ __('Arabic First Name') }}</label>

                            <div class="col-md-6">
                                <input id="ar_first_name" type="text" class="form-control @error('ar_first_name') is-invalid @enderror" name="ar_first_name" value="{{ old('ar_first_name') }}" required autocomplete="ar_first_name" autofocus>

                                @error('ar_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="en_first_name" class="col-md-4 col-form-label text-md-end">{{ __('English First Name') }}</label>

                            <div class="col-md-6">
                                <input id="en_first_name" type="text" class="form-control @error('en_first_name') is-invalid @enderror" name="en_first_name" value="{{ old('en_first_name') }}" required autocomplete="en_first_name" autofocus>

                                @error('en_first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Repeat the pattern for 'ar_last_name', 'en_last_name', 'ar_type', 'en_type', 'phone' -->

                        <div class="row mb-3">
                            <label for="ar_last_name" class="col-md-4 col-form-label text-md-end">{{ __('Arabic Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="ar_last_name" type="text" class="form-control @error('ar_last_name') is-invalid @enderror" name="ar_last_name" value="{{ old('ar_last_name') }}" required autocomplete="ar_last_name" autofocus>

                                @error('ar_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Repeat the same pattern for 'en_last_name', 'ar_type', 'en_type', 'phone' -->

                        <div class="row mb-3">
                            <label for="en_last_name" class="col-md-4 col-form-label text-md-end">{{ __('English Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="en_last_name" type="text" class="form-control @error('en_last_name') is-invalid @enderror" name="en_last_name" value="{{ old('en_last_name') }}" required autocomplete="en_last_name" autofocus>

                                @error('en_last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Arabic Gender -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Arabic Gender') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ar_gender" id="male_ar" value="ذكر" checked>
                                    <label class="form-check-label" for="male_ar">{{ __('ذكر') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ar_gender" id="female_ar" value="أنثي">
                                    <label class="form-check-label" for="female_ar">{{ __('أنثي') }}</label>
                                </div>
                            </div>
                        </div>

                        <!-- English Gender -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('English Gender') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="en_gender" id="male_en" value="male" checked>
                                    <label class="form-check-label" for="male_en">{{ __('Male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="en_gender" id="female_en" value="female">
                                    <label class="form-check-label" for="female_en">{{ __('Female') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection