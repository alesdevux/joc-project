@extends('layouts.app')

@section('content')
<p>{{ $category->name }}</p>
<p>{{ $category->slug }}</p>
<img src="{{ $category->image }}" alt="">
@endsection