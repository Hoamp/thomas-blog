@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}

        <a href="/posts">Back</a>
    </article>
@endsection