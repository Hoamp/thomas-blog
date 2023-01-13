@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Category</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/profile/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control " id="username" name="username" required autofocus value="{{ auth()->user()->username }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-5">
                <button type="submit" class="btn btn-primary ">Update Profile</button>
                <a href="/dashboard/profile" class="btn btn-success"><span data-feather="arrow-left" class=""></span>Back</a>
            </div>
        </form>
    </div>

    <script>
        // const name = document.querySelector('#name');
        // const slug = document.querySelector('#slug');

        // name.addEventListener('change', function(){
        //     fetch('/dashboard/categories/checkSlug?name=' + name.value)
        //         .then(response => response.json())
        //         .then(data => slug.value = data.slug);
        // });

    </script>
@endsection