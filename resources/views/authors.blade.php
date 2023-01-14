@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        @foreach ($users as $user)
            <ul>
                <li><a href="/posts?author={{ $user->username }}">{{ $user->name }}</a></li>    
            </ul>            
        @endforeach    
    </div>    
@endsection