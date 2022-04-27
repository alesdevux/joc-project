@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
    @csrf
    <h2 class="text-white uppercase">{{ __('login') }}</h2>
    <x-input name="email">
        email
    </x-input>
    <x-input name="password" type="password">
        password
    </x-input>
    <!--@error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror-->

    <!--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror-->

    <div class="text-white uppercase">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>

    <div class="flex justify-between">
        @if (Route::has('password.request'))
        <x-link_button route="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </x-link_button>
        @endif
        <x-button>
            {{ __('Login') }}
        </x-button>
    </div>
</form>
@endsection