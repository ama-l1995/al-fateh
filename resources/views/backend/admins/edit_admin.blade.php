@extends('backend.layouts.parent')

@section('title', 'Create Admins')

@section('content')
@extends('backend.incloudes.messages')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }}</div>

                <div class="card-body">
                <form action="{{ route('update_admin', [$admin->id, 'locale' => app()->getLocale()]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <!-- First Name -->
                        <div class="row mb-3">
                            <label for="en_first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="en_first_name" type="text" class="form-control @error('en_first_name') is-invalid @enderror" name="en_first_name" value="{{ $admin->en_first_name }}" required autocomplete="en_first_name" autofocus>
                                @error('en_first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Other input fields go here -->

                        <!-- Arabic First Name -->
                        <div class="row mb-3">
                            <label for="ar_first_name" class="col-md-4 col-form-label text-md-end">{{ __('الاسم الاول') }}</label>
                            <div class="col-md-6">
                                <input id="ar_first_name" type="text" class="form-control @error('ar_first_name') is-invalid @enderror" name="ar_first_name" value="{{ $admin->ar_first_name }}" required autocomplete="ar_first_name" autofocus>
                                @error('ar_first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- E Last Name -->
                        <div class="row mb-3">
                            <label for="en_last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="en_last_name" type="text" class="form-control @error('en_last_name') is-invalid @enderror" name="en_last_name" value="{{ $admin->en_last_name }}" required autocomplete="en_last_name" autofocus>
                                @error('en_last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- A Last Name -->
                        <div class="row mb-3">
                            <label for="ar_last_name" class="col-md-4 col-form-label text-md-end">{{ __('الاسم الثاني') }}</label>
                            <div class="col-md-6">
                                <input id="ar_last_name" type="text" class="form-control @error('ar_last_name') is-invalid @enderror" name="ar_last_name" value="{{ $admin->ar_last_name }}" required autocomplete="ar_last_name" autofocus>
                                @error('en_last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- E Gender -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="en_gender" id="en_gender_male" value="male" {{ old('en_gender', $admin->en_gender) == 'male' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="en_gender_male">{{ __('Male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="en_gender" id="en_gender_female" value="female" {{ old('en_gender', $admin->en_gender) == 'female' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="en_gender_female">{{ __('Female') }}</label>
                                </div>
                            </div>
                        </div>


                        <!-- Arabic Gender -->
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ar_gender" id="ar_gender_male" value="ذكر" {{ old('ar_gender', $admin->ar_gender) == 'ذكر' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ar_gender_male">{{ __('ذكر') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ar_gender" id="ar_gender_female" value="أنثي" {{ old('ar_gender', $admin->ar_gender) == 'أنثي' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ar_gender_female">{{ __('انثي') }}</label>
                                </div>
                            </div>
                        </div>

                         <!-- Email Address -->
                        <div class="row mb-3">
                            <label for=" email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id=" email" type=" email" class="form-control @error(' email') is-invalid @enderror" name=" email" value="{{ $admin->email }}" required autocomplete=" email">
                                @error(' email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-3">
                            <label for=" phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id=" phone" type=" phone" class="form-control @error(' phone') is-invalid @enderror" name=" phone" value="0{{$admin->phone }}" required autocomplete="phone">
                                @error(' phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Admin Type (Admin/superAdmin) -->
                        <div class="row mb-3">
                            <label for="en_type" class="col-md-4 col-form-label text-md-end">{{ __('Admin Type') }}</label>
                            <div class="col-md-6">
                                <select id="en_type" class="form-select @error('en_type') is-invalid @enderror" name="en_type" required>
                                    <option value="superAdmin" {{ old('en_type', $admin->en_type ?? '') == 'superAdmin' ? 'selected' : '' }}>Super Admin</option>
                                    <option value="admin" {{ old('en_type', $admin->en_type ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                                @error('en_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ar_type" class="col-md-4 col-form-label text-md-end">{{ __('نوع المسؤول') }}</label>
                            <div class="col-md-6">
                                <select id="ar_type" class="form-select @error('ar_type') is-invalid @enderror" name="ar_type" required>
                                    <option value="مسؤل عام" {{ old('ar_type', $admin->ar_type ?? '') == 'مسؤل عام' ? 'selected' : '' }}>مسؤل عام</option>
                                    <option value="مسؤل" {{ old('ar_type', $admin->ar_type ?? '') == 'مسؤل' ? 'selected' : '' }}>مسؤل</option>
                                </select>
                                @error('ar_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <!-- Admin Status (Active/Not Active) -->
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <select id="status" class="form-select @error('status') is-invalid @enderror" name="status">
                                    <option value="1" {{ old('status', $admin->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $admin->status ?? '') == '0' ? 'selected' : '' }}>Not Active</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--English Password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $admin->password }}" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--English Confirm Password -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $admin->password }}" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Admin') }}
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