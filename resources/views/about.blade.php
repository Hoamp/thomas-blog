@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="" class="img-thumbnail rounded-circle" width="200px">
</div>

@endsection