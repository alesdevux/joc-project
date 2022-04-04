@extends('layouts.app')

@section('content')
  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    @foreach($categories as $category)
      <div class="w-[275px] h-[404px] relative font-pop card mt-2 mx-auto group overflow-hidden hover:border-4 hover:border-principal cursor-pointer hover:drop-shadow-consistent">
        <div id="info-text" class="absolute z-20 font-semibold text-white uppercase -left-36 top-5 group-hover:left-5">
          <p class="text-[13px] mb-2">Siguiente</p>
          <p>Martes 23 junio</p>
          <p>19:30h</p>
        </div>
        <div id="juego" 
          class="absolute bottom-0 z-20 w-full text-center">
          <div class="absolute w-full scale-125 -bottom-44 group-hover:bottom-0 h-28 bg-principal -rotate-2"></div>
          <h2 class="absolute w-full text-white bottom-4 h2 group-hover:text-dark group-hover:bottom-20">
            {{ $category->name }}
          </h2>
          <h4 class="absolute w-full destacar -bottom-20 group-hover:bottom-16">
            3 torneos en curso
          </h4>
          <div class="absolute w-full scale-125 -bottom-40 group-hover:bottom-0 bg-dark h-14 -rotate-2"></div>
          <p class="absolute w-full h2 -bottom-10 text-principal group-hover:bottom-2">
            Inscribete
          </p>
        </div>
        <div id="filtro" class="absolute top-0 z-10 w-full h-full bg-cover"></div>
        <div class="absolute w-full h-full top-0 z-0 box-content">
          <img src="{{ $category->image }}" alt="" class="h-full">
        </div>
        {{-- <div id="img-fondo"
          class="bg-[url('{{ $category->image }}')] absolute w-full h-full top-0 z-0 bg-cover">
        </div> --}}
      </div>
    @endforeach
  </div>
  <div class="text-center">
    {{ $categories->links() }}
  </div>
@endsection
