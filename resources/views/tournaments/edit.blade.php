@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('tournaments.update', $tournament->id) }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
  @method('PATCH')
  @csrf

  <div class="relative pt-8 text-white bg-dark">
    <input type="text" id="name" name="title" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secondary focus:outline-none" value="{{ $tournament->title }}" />
    <label for="title" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secondary">
      Title: *
    </label>
  </div>

  <div>
    <button type="submit" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secondary">
      Actualizar
    </button>
    <a href="{{ route('home') }}" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secondary">
      Cancelar
    </a>
  </div>

</form>
@endsection