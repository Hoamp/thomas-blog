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

            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <input type="text" class="form-control " id="bio" name="bio" required autofocus value="{{ auth()->user()->bio }}">
                @error('bio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Profile Image</label>
                <input type="hidden" name="oldAvatar" value="{{ $profile->avatar }}">
                @if ($profile->avatar)
                    <img src="{{ asset('storage/' . $profile->avatar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block rounded-circle img-thumbnail">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5 rounded-circle img-thumbnail">
                @endif

                <input class="form-control @error('avatar') is-invalid @enderror" type="file" id="image" name="avatar" onchange="previewImage()">
                @error('avatar')
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
         function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection