@extends('layouts.main')

@section('content')
<div class="row justify-content-center ">
    <div class="col-md-5 border shadow-sm p-4 mt-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                </div>
            @endif
            
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback mb-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-4" name="password" id="password" placeholder="Password" required>
                </div>
        
                <button class="w-100 btn btn-lg btn-primary " type="submit">Login</button>
            </form>
            <small class="text-center d-block mt-4">Not Register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection 