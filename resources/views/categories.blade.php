@extends('layouts.main')

@section('content')
    <h1>Post Categories</h1>

    {{-- penambahan kondisi empty nanti --}}
    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection