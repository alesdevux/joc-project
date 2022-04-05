@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('categories.update', $category->id) }}">
  @method('PUT')
  @csrf

  <div class="relative pt-8 text-white bg-dark">
    <input type="text" id="name" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secundary focus:outline-none" value="{{ $category->name }}" />
    <label for="name" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secundary">
      Nombre: *
    </label>
  </div>

  <div class="relative pt-8 text-white bg-dark">
    <input type="text" id="slug" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secundary focus:outline-none" value="{{ $category->slug }}" />
    <label for="slug" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secundary">
      Slug: *
    </label>
  </div>

  <div class="relative pt-8 text-white bg-dark">
    <input type="text" id="image" class="absolute bottom-0 z-10 w-full px-2 py-1 border-4 border-white peer h-9 bg-dark focus:border-secundary focus:outline-none" value="{{ $category->image }}" />
    <label for="image" class="absolute z-50 px-1 font-semibold uppercase left-2 bg-dark bottom-6 peer-focus:text-secundary">
      Url de imagen: *
    </label>
  </div>

  <div>
    <button type="submit" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secundary">
      Actualizar
    </button>
    <button>
      <a href="{{ route('home') }}" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secundary">
        Cancelar
      </a>
    </button>
  </div>

</form>
@endsection