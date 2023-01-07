@extends('layouts.main')

@section('content')
    <section class="hero">
        <div class="container py-5">
            <div class="row my-3 mb-4">
                <div class="col-md-8">
                    <h1><span class="blog bg-white px-3 shadow-sm rounded-lg text-danger">Thomas</span> Blog</h1>
                    <p class="lead mt-3">Mau Nyari Apa Hari Ini?</p>
                    <hr class="my-3 mr-5">
                    <form action="/posts" method="GET" class="card-search card-sm mt-4 mr-5">
                        <div class="card-body row no-gutters align-items-center" style="padding: 0">
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="Mau Cari Apa Hari Ini?">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="" alt="a">
                    <h1>Gambar</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container py-5">
            <div class="text-center text-white">
                <h1>Last Posts</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </section>
@endsection