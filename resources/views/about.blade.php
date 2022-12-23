@extends('layouts.main')

@section('content')
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="" class="img-thumbnail rounded-circle" width="200px">
@endsection