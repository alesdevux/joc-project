@extends('layouts.app')

@section('content')
<x-banner :name="$category->name" :img="$category->image">
</x-banner>

<div class="bg-dark w-[244px] h-fit text-principal uppercase font-semibold" >
</div>
<section class="flex flex-col gap-2 mt-10">

<x-button>
    inscribete
</x-button>

@endsection