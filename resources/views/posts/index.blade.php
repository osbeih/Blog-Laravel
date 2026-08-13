@extends('layouts.app')
@section('title', 'Posts')

@section('content')
<div class="container mt-5 p-1">
    <a class="btn btn-success" href="{{ route("posts.create") }}">Create Post</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Posted_By</th>
                <th scope="col">Created_at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user ? $post->user->name : "Not Found"}}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show', ['post' => $post['id']]) }}">view</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit' , ['post' => $post['id']]) }}">edit</a>
                    <a class="btn btn-danger btn-sm">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection