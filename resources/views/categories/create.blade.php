@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('categories.store') }}" class="flex flex-col max-w-lg gap-5 mx-auto mt-5">
  @csrf
  <x-input  name="name" >
    nombre 
  </x-input>

  <x-input name="slug">
    slug
  </x-input>

  
  <x-input name="image">
    url de imagen 
  </x-input>


  <div class="flex justify-between">
    <x-link_button :route="route('home')">
      Cancelar
    </x-link_button>

    <x-button>
      Crear categoria   
    </x-button>
  </div>
</form>
@endsection