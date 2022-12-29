@extends('layouts.main')

@section('content')
<div class="row justify-content-center ">
    <div class="col-md-5 border shadow-sm p-4 mt-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form>
                <div class="form-floating">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control mb-4" id="floatingPassword" placeholder="Password">
                </div>
        
                <button class="w-100 btn btn-lg btn-primary " type="submit">Login</button>
            </form>
            <small class="text-center d-block mt-4">Not Register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>


@endsection 