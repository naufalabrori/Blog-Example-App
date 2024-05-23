@extends('layouts.app')

@section('title', 'Create Blog')

@section('content')
    <h1>Create New Blog</h1>
    <form method="POST" action="{{ url('posts') }}" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
