<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'First User','email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'],
            ['id' => 2, 'title' => 'Second User','email' => 'mony@gmail.com', 'description' => 'This Is  Second description', 'posted_by' => 'Mony', 'created_at' => '2019-09-01'],
        ];

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {
        $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];


        return view('posts.show', [
            'post' => $post
        ]);
    }


 // Create and Store
    public function create()
    {
        $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];

        return view('posts.create', [
            'post' => $post
        ]);
        // return view('posts.create');
    }
    
    public function store()
    {
        //logic for saving in db

        return redirect()->route('posts.index');
    }




// Edit and Update
    public function edit()
    {
        $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];

        return view('posts.edit', [
            'post' => $post
        ]);
    }
    public function update()
    {
        //logic for saving in db

        return redirect()->route('posts.index');
    }




}

