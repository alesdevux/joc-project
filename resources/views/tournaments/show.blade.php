@extends('layouts.app')

@section('content')
<x-banner :name="$tournament->name" :img="$tournament->image">
</x-banner>

<x-listevent :name="$tournament->title" :reward="$tournament->award">
</x-listevent>

<form method="POST" action="{{ route('tournaments.join', $tournament->id) }}" class="flex justify-end">
  @method('PATCH')
  @csrf
  <x-button>
      inscribete
  </x-button>
</form>

@foreach($tournament->users as $user) 
  <x-user_stake :name="$user->name" :country="$user->country" :award="$user->award">
  </x-user_stake>
@endforeach

@endsection