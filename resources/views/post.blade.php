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
                        
                        <section class="mt-5">
                            <hr>
                            <h4>Comments</h4>
                            <form action="/comment" method="post">
                                @csrf
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                <input type="hidden" name="slug" value="{{ $post->slug }}">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                                            <trix-editor input="content"></trix-editor>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary ">Post Comment</button>
                            </form>

                            <div class="mt-5">
                                <h4 class="mb-3">Other Comments</h4>
                                @forelse ($comments as $comment)
                                    <div class="container mb-3">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card-title"><img src="{{ asset('storage/' . $comment->author->avatar) }}" alt="PP" width="40px" class="rounded img-thumbnail mr-3">{{ $comment->author->username }}</div>
                                                            </div>
                                                            <div class="col-md-7"></div>
                                                            <div class="col-md-1">
                                                                @if ($username === $comment->author->username)
                                                                    
                                                                    <form action="/comment/{{ $comment->id }}" method="post" class="d-inline">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <input type="hidden" name="slug" value="{{ $post->slug }}">
                                                                        <button class="badge border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash" class=""></span></button>
                                                                    </form>

                                                                @else
                                                                    
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr >
                                                        <div class="card-text">{!! $comment->content !!}</div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <hr>
                                    <h5 class="text-center">No Comment Here</h5>
                                    <hr>
                                @endforelse
                            </div>
                        </section>
                
                        <a href="/posts" class="d-block">Back</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection