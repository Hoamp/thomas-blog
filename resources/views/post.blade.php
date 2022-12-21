@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>By : {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>

        <a href="/posts">Back</a>
    </article>
@endsection