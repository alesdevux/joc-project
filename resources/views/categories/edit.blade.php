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
    <x-link_button :route="route('home')">
      Cancelar
    </x-link_button>

    <x-button>
      Actualizar
    </x-button>
  </div>

</form>
@endsection