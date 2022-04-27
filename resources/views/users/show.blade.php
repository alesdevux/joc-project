@extends('layouts.app')

@section('content')




<div class="flex flex-col items-center bg-dark">
  <div>
  <img class="rounded-full mt-20 mb-4 w-52 h-52" src="https://areajugones.sport.es/wp-content/uploads/2021/06/pikachu-pokemon.jpeg" alt="imagen perfil">
</div>
<div class="text-h2 text-pop text-secundary">
pikachu
</div>
<x-button>Editar</x-button>
<div id="name" class="text-h2 text-pop m-2 text-secundary">name</div>
<div id="age" class="text-h2 text-pop mb-2 text-secundary">age</div>
<div id="awards" class="text-h2 text-pop mb-2 text-secundary">awards</div>
</div>

@endsection