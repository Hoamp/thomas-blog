@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <article class="mb-4">
            <h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
            <h5>By : {{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection