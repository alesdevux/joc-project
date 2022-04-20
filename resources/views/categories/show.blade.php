@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('categories.show', $category->id) }}">

<x-banner type="" :name="$category->name">
</x-banner>

<p>{{ $category->name }}</p>
<p>{{ $category->slug }}</p>
<img src="{{ $category->image }}" alt="">
</form>
@endsection