@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container mt-5 p-1">
    <h1 class="mt-2" style="text-align: center;">Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PATCH')

        <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
            <label for="title">Title</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $post->description }}</textarea>
            <label for="floatingTextarea2">Description</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" type="text" value="{{ $post->user->name }}" disabled>
            <label for="title">Post Creater</label>
        </div>

        <button class="btn btn-success" type="submit">Save</button>
    </form>
</div>

@endsection