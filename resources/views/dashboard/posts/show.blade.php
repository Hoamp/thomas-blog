@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class=""></span>Back To Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><span data-feather="edit" class=""></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="trash" class=""></span>Delete</button>
            </form>
            
            @if ($post->image)
                <div class="" style="max-height: 350px; overflow: hidden">

                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}

            </article>    
        </div>
    </div>
</div>
@endsection