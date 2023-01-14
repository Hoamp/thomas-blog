@extends('layouts.main')

@section('content')
<div class="container mt-4 text-center">
    <h1>{{ auth()->user()->username }}</h1>
    <p>{{ auth()->user()->email }}</p>
    <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="" class="img-thumbnail rounded-circle" width="200px">
</div>
@endsection