@extends('layouts.app')

@section('title' , 'Create Post')

@section('content')
<div class="container mt-5 p-1">
    <h1 class="mt-2" style="text-align: center;">Creat Post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="title" placeholder="name@example.com">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="description" placeholder="description">
            <label for="description">Description</label>
        </div>
        <a class="btn btn-success" type="submit" href="{{ route('posts.index') }}">Create</a>
    </form>
</div>

@endsection