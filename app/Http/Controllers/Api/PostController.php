<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //



    public function index()
    {
        $posts = Post::all();
        $pages =Post::paginate(1);
        return PostResource::collection($pages);
    }
    
    public function show($post)
    {
        $post = Post::find($post);
        return new PostResource($post);
    }


    public function store(StorePostRequest $request)
    {
  
         $data = request()->all();

        $validated = $request->validate([
            'title' => 'unique:posts'
            
        ]);

       
        // Post::create($data);
        return new PostResource($data);
    }

}
