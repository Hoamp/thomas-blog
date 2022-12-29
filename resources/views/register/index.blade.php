@extends('layouts.main')

@section('content')
<div class="row justify-content-center ">
    <div class="col-md-5 border shadow-sm p-4 mt-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
            <form>
                <div class="form-floating">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mb-3" id="name" placeholder="name" name="name">
                </div>
                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mb-3" id="username" placeholder="username" name="username">
                </div>
                <div class="form-floating">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control mb-3" id="email" placeholder="email@example.com">
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mb-4" id="password" placeholder="Password">
                </div>
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="text-center d-block mt-4">Have Account? <a href="/login">Login!</a></small>
        </main>
    </div>
</div>


@endsection 