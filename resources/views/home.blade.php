@extends('layouts.app')

@section('content')

<x-banner type="" name="" value="$category->name">
</x-banner>

@if (Auth::check() && Auth::user()->isAdmin())
  <div>
    <a href="{{ route('categories.create') }}" class="flex justify-center p-2 border-t-2 border-principal place-items-center hover:bg-terciary hover:text-dark">
      Crear una nueva categoría
    </a>
  </div>
@endif



  <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    @foreach($categories as $category)
      <div class="w-[275px] h-[404px] relative font-pop card mt-2 mx-auto group overflow-hidden hover:border-4 hover:border-principal cursor-pointer hover:drop-shadow-consistent">
        <div class="absolute z-20 font-semibold text-white uppercase -left-36 top-5 group-hover:left-5">
          <p class="text-[13px] mb-2">Siguiente</p>
          <p>Martes 23 junio</p>
          <p>19:30h</p>
        </div>
        @if (Auth::check() && Auth::user()->isAdmin())
          <div class="absolute z-40 flex flex-col text-white border-4 border-r-0 top-5 -right-16 group-hover:right-0 border-principal">
            <form action="{{ route('categories.delete', $category->id) }}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" onclick="return confirm('¿Estás seguro de eliminar la categoría {{ $category->name }}?')"
                class="flex justify-center w-10 h-10 border-b-2 border-principal place-items-center hover:bg-terciary hover:text-dark">
                x
              </button>
            </form>

            <a href="{{ route('categories.edit', $category->id) }}">
              <button class="flex justify-center w-10 h-10 border-t-2 border-principal place-items-center hover:bg-terciary hover:text-dark">
                edit
              </button>
            </a>
          </div>
        @endif
        <a href="{{ route('categories.show', $category->id) }}" class="absolute top-0 z-30 w-full h-full bg-cover"></a>
        <div class="absolute bottom-0 z-20 w-full text-center">
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
        <div class="absolute top-0 z-10 w-full h-full bg-cover"></div>
        <div class="box-content absolute top-0 z-0 w-full h-full">
          <img src="{{ $category->image }}" alt="" class="h-full">
        </div>
        {{-- <div
          class="bg-[url('{{ $category->image }}')] absolute w-full h-full top-0 z-0 bg-cover">
        </div> --}}
      </div>
    @endforeach
  </div>
  <div class="text-center">
    {{ $categories->links() }}
  </div>
@endsection
