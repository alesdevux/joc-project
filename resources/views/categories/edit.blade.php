@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('categories.update', $category->id) }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
  @method('PATCH')
  @csrf

  <x-input name="name" :value="$category->name">
    Nombre:
  </x-input>
  <x-input name="slug" :value="$category->slug">
    Slug:
  </x-input>
  <x-input name="image" :value="$category->image">
    Url de imagen:
  </x-input>

  <div>
    <!--<button type="submit" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secundary">
      Actualizar
    </button> -->
    <x-button>
      Actualizar
    </x-button>
    <a href="{{ route('home') }}" class="px-4 py-2 font-bold text-white bg-dark hover:bg-secundary">
      Cancelar
    </a>
  </div>

</form>
@endsection