@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div>
        <h1 class="text-danger font-weight-bold">
            NOPAL.COM
        </h1>
        <a class="btn btn-success" href="{{url("posts/create")}}">Create New Blog</a>
        @foreach ($posts as $post)
            <div class="card mb-3 mt-2">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content}}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Action</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
