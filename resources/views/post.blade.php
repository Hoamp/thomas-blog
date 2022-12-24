@extends('layouts.main')

@section('content')
    <article>
        <h2 class="mb-3">{{ $post->title }}</h2>

        <p>By : Thomas in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}

        <a href="/posts">Back</a>
    </article>
@endsection