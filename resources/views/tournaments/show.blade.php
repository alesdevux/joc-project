@extends('layouts.app')

@section('content')
<x-banner :name="$tournament->name" :img="$tournament->image">
</x-banner>

<x-listevent name='lolololol' reward='1.000.000'>
</x-listevent>

{{-- <div class="bg-dark w-[244px] h-fit text-principal uppercase font-semibold" >
</div>
<section class="flex flex-col gap-2 mt-10"> --}}

<x-button>
    inscribete
</x-button>

@foreach($tournament->users as $user) 
  <x-user_stake :name="$user->name" :country="$user->country" :award="$user->award">
  </x-user_stake>
@endforeach

@endsection