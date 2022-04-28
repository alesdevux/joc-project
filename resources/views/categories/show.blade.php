@extends('layouts.app')

@section('content')

<x-banner :name="$category->name" :img="$category->image">

</x-banner>
@if(Auth::check() && Auth::user()->isAdmin())

    <a href="{{ route('tournaments.create') }}" class="flex justify-center p-2 text-secondary place-items-center hover:bg-terciary hover:text-dark">
        Create new Tournament
    </a>
    @endif

<div class="bg-dark w-[244px] h-fit text-principal uppercase font-semibold items-center">
</div>
<section class="flex flex-col gap-2 md:max-w-[1000px] items-center mt-10 mx-auto">
    @forelse($category->tournaments as $tournament)
    <div class="flex w-full gap-1 max-w-sm md:max-w-none">
        <x-infotime :date='getDateOfDateTime($tournament->date)' :time='getTimeOfDateTime($tournament->date)'>
        </x-infotime>
        <x-listevent :name='$tournament->title' :reward='$tournament->award'>
        </x-listevent>

    @guest
    <a href="{{ route('login') }}">
        <x-link_button>
         inscribete
        </x-link_button>
    </a>
    @endguest

    </div>
    @empty
    <p style="color:white; font-size:25px">We don't have tournaments of this kind right now ):</p>
    @endforelse
</section>
@endsection