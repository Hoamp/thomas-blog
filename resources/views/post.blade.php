@extends('layouts.main')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center mb-5">
            <div class="card">
                <div class="card-body">
                    
                    <div class="col-md">
                        <h2 class="mb-3">{{ $post->title }}</h2>

                        <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                        @if ($post->image)
                            <div class="" style="max-height: 350px; overflow: hidden">

                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                        @endif

                        <article class="my-3 fs-5">
                            {!! $post->body !!}

                        </article>
                
                        <a href="/posts" class="d-block">Back</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection