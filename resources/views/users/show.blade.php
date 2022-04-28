@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center bg-dark text-white gap-2">
  <div class="rounded-full mt-20 mb-4 w-52 h-52 overflow-hidden">
    <img class="object-cover h-full" src="https://areajugones.sport.es/wp-content/uploads/2021/06/pikachu-pokemon.jpeg" alt="imagen perfil">
  </div>
  <p class="text-h2">{{ $user->name }}</p>
  <p>{{ $user->email }}</p>
  <div class="flex gap-3 items-center mb-5">
    <p>{{ $user->award }}</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
      <path d="M18 2C17.1 2 16 3 16 4H8C8 3 6.9 2 6 2H2V11C2 12 3 13 4 13H6.2C6.6 15 7.9 16.7 11 17V19.08C8 19.54 8 22 8 22H16C16 22 16 19.54 13 19.08V17C16.1 16.7 17.4 15 17.8 13H20C21 13 22 12 22 11V2H18ZM6 11H4V4H6V11ZM16 11.5C16 13.43 15.42 15 12 15C8.59 15 8 13.43 8 11.5V6H16V11.5ZM20 11H18V4H20V11Z" fill="white" />
    </svg>
  </div>
  <x-link_button :route="route('users.edit', $user->id)">Editar</x-link_button>
</div>

@endsection