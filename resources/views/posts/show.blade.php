@extends('layouts.app')

@section('title')
    Blog | {{ $post->title }}
@endsection

@section('content')

    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</a></p>

        <p>{{ $post->content }}</p>

        <small class="text-muted">{{ $total_comment }} Komentar</small>
        @foreach($comments as $comment)
        <div class="card mb-1">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
            </div>
        </div>

        @endforeach

    </article>
    <a href="{{ url("posts") }}">< Kembali</a>

    @endsection
