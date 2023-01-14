@extends('layouts.main')

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-md-5 border shadow-sm p-4 mt-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-3 @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" name="email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-4 @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <input type="hidden" name="avatar" value="avatar/userprofile.jpg">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="text-center d-block mt-4">Have Account? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>


@endsection 