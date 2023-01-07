@extends('layouts.main')

@section('content')
    <section class="hero">
        <div class="container py-5">
            <div class="row my-3 mb-4">
                <div class="col-md-8">
                    <h1><span class="blog bg-white px-3 shadow-sm rounded-lg text-danger">Thomas</span> Blog</h1>
                    <p class="lead mt-3">Mau Nyari Apa Hari Ini?</p>
                    <hr class="my-3 mr-5">
                    <form action="/posts" method="GET" class="card-search card-sm mt-4 mr-5">
                        <div class="card-body row no-gutters align-items-center" style="padding: 0">
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="Mau Cari Apa Hari Ini?">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="" alt="a">
                    <h1>Gambar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container py-5">
            <div class="text-center text-dark mb-5">
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
    </section>
@endsection