@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('password.email') }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
    @csrf
    <h2 class="text-white uppercase">{{ __('Reset Password') }}</h2>
    <x-input name="email">
        email
    </x-input>
            <!--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>-->

                <x-button>
                    {{ __('Send Password Reset Link') }}
                </x-button>
</form>
@endsection