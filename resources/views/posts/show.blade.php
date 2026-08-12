@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<div class="container mt-5 p-2">
    <div class="card">
        <h5 class="card-header">Post Details</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['description'] }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection