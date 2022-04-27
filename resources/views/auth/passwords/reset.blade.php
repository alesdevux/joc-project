@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('password.update') }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
    @csrf
    <h2>{{ __('Reset Password') }}</h2>

    <input type="hidden" name="token" value="{{ $token }}">

    <x-input name="email">
        email
    </x-input>
    <x-input name="password">
        password
    </x-input>
    <x-input name="password_confirmation">
        password confirmation
    </x-input>

    <!--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>-->

    <!--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>-->

    <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>-->
        <X-button>
            {{ __('Reset Password') }}
        </X-button>
</form>
@endsection