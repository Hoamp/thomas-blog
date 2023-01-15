@extends('layouts.main')

@section('content')
<div class="container mt-4 text-center">
    <div class="">
        <h1>{{ auth()->user()->username }}</h1>
        <p>{{ auth()->user()->email }}</p>
        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="" class="img-thumbnail rounded-circle" width="200px">
    </div>

    <div class="text-center text-dark my-5">
        <h1>Last Posts</h1>
        <hr width="220px" class="border-primary">
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="position-absolute p-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid rounded-sm">
                    @else
                        <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top rounded-sm" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                        <p>
                            <small class="text-muted">
                                <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                                
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>

</div>
@endsection