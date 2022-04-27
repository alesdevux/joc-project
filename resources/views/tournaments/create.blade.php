@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('categories.store') }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
  @csrf
  <x-input name="title" >
    Nombre de evento
  </x-input>

  <x-input name="slug">
    slug
  </x-input>

  <textarea name="description">
  </textarea>

  <x-input name="award">
    Premio
  </x-input>

  <x-input name="date" type="datetime-local">
    Fecha
  </x-input>

  <x-input name="plataform">
    Plataforma
  </x-input>

  <x-input name="participants">
    Participantes
  </x-input>

  <div class="relative pt-8 text-white bg-dark">
    <select id="category_id" name="category_id" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secundary focus:outline-none">
      <option value="" disabled>Selecciona una categoria</option>
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
    <label for="category_id" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secundary">
      Categoria
    </label>
  </div>

  <div class="flex justify-between">
    <x-link_button :route="route('home')">
      Cancelar
    </x-link_button>

    <x-button>
      Crear evento   
    </x-button>
  </div>
</form>
@endsection