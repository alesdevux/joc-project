@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }} " class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
    @csrf
    <h2 class="text-white uppercase">{{ __('Register') }}</h2>
    <x-input name="name">
        name
    </x-input>
    <x-input name="email">
        email
    </x-input>
    <x-input name="password" type="password">
        password
    </x-input>
    <x-input name="password_confirmation" type="password">
        confirm password
    </x-input>
    <!--<div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>-->

    <!--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>-->

    <div class="flex justify-between">
        <x-link_button route="{{route('home')}}">
            cancelar
        </x-link_button>
        <x-button type="submit">
            {{ __('Register') }}
        </x-button>
    </div>
</form>
@endsection