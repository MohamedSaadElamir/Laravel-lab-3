<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {

        $allPosts = Post::all();


        return view('posts.index', [
          'posts' => $allPosts
        ]);
    }

    public function create()
    {
        $allUsers = User::all();

        return view('posts.create',[
            'allUsers' => $allUsers
        ]);
    }

    public function show($postId)
    {
        $arr = [
            ['id' => 1 , 'category' => 'test']
        ];

        $post = Post::find($postId);


        return 'we are in show now';
    }

    public function store(StorePostRequest $request)
    {

        $data = $request->all();


        Post::create([
            'title' => request()->title,
            'description' => $data['description'],
            'user_id' => $data['post_creator'],
        ]);

        return Route('posts.index');
    }
}
