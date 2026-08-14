@extends('layouts.app')

@section('title' , 'Create Post')

@section('content')


<div class="container mt-5 p-1">
    <h1 class="mt-2" style="text-align: center;">Creat Post</h1>
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="name@example.com">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>

        <select class="form-select mb-3" aria-label="Default select example" name="user_id">
            <option selected>Post creter</option>
            @foreach ( $users as $user )
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-success" type="submit">Create</a>
    </form>

</div>





@endsection