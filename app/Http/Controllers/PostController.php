<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view("posts.index", [
            "posts" => $posts,
        ]);
    }

    public function show($postId)
    {
        // $post = Post::where('id', $postId)->first(); // limit 1 
        // $post = Post::where('title', "Java")->get();      // gets all matches result

        $post = Post::find($postId);
        return view("posts.show", ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }

    public function store(Request $myRequest) // Request == request()
    {
        // $requestData = request(); // helper method 
        // dd($requestData->all());  // all() => $_POST
        // dd($data['title']);  // $data['title] == request()->title


        // 1 - get data from request data
        $data = $myRequest->all();

        // 2 - store data
        ## one way
        // Post::create([
        //     'title' => $data['title'],
        //     'description' => $data['description'],
        // ]);

        ##onther Way
        Post::create($data);
        ##More Way // with this syntax we dont need fillable in a Model
        // $post = new Post; // empty object
        // $post->title = $data['title']; // assign the attribute of object
        // $post->description = $data['description'];
        // $post->save();

        return redirect()->route('posts.index');
    }

    public function edit($postId)
    {
        $postToUpdate = Post::find($postId);
        return view('posts.edit', ['post' => $postToUpdate]);
    }

    public function update(Request $request,$postId)
    {
        $edit = $request->all();

        $post = Post::find($postId);
        $post->title = $edit['title'];
        $post->description = $edit['description'];

        $post->save();
        
        return redirect()->route('posts.index');
    }
}
