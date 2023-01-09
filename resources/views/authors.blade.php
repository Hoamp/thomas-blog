@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        @foreach ($users as $user)
            <ul>
                <li><a href="/posts?author={{ $user->name }}">{{ $user->name }}</a></li>    
            
            </ul>            
        @endforeach    
    
    </div>    
@endsection