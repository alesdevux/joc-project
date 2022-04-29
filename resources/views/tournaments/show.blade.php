@extends('layouts.app')

@section('content')
<x-banner :name="$tournament->title" :img="$tournament->category->image">
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

@if (Auth::check() && Auth::user()->isAdmin())
<div class="flex my-5 justify-between">
  <form method="POST" action="{{ route('tournaments.delete', $tournament->id) }}" class="flex justify-end">
    @method('DELETE')
    @csrf
    <x-button class="border-transparent">
        delete
    </x-button>
  </form>
  <x-link_button :route="route('tournaments.edit', $tournament->id)">
      edit
  </x-link_button>
</div>
@endif

@foreach($tournament->users as $user) 
  <x-user_stake :name="$user->name" :country="$user->country" :award="$user->award">
  </x-user_stake>
@endforeach

@endsection