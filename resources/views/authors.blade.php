@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-3">All Authors</h1>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="storage/{{ $user->avatar }}" class="card-img-top" alt="..." style="width: 100%; height:330px;">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts?author={{ $user->username }}">{{ $user->name }}</a></h5>
                            <p class="card-text">Bio next update</p>
                            <a href="/posts?author={{ $user->username }}" class="btn btn-primary">Lebih Lengkap</a>
                        </div>
                    </div>     
                </div>
            @endforeach   
        </div>

    </div>    
@endsection