@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>            
    @endif

    <div class="container mt-4">
        <div class="row text-center">
            <div class="col">
                <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="PP" class="rounded-circle img-thumbnail" width="200px">
            </div>
        </div>

        <div class="row text-center mt-2">
            <h5>{{ auth()->user()->username }}</h5>
            <small class="text-muted">{{ auth()->user()->email }}</small>
        </div>

        <a href="/dashboard/profile/{{ auth()->user()->id }}/edit">Edit Profile</a>
    </div>

@endsection