<?php
namespace App\Http\Controllers;

use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        $pages =Post::paginate(3);
        // dd($posts);
        // $posts = [
        //     ['id' => 1, 'title' => 'First User','email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'],
        //     ['id' => 2, 'title' => 'Second User','email' => 'mony@gmail.com', 'description' => 'This Is  Second description', 'posted_by' => 'Mony', 'created_at' => '2019-09-01'],
        // ];

        return view('posts.index', [
            'posts' => $posts,
            'posts' => $pages
           
        ]);
    }

    public function show($post)
    {
        $post = Post::find($post);
        $dateCarboon = Carbon::parse($post['created_at'],'UTC');
        
        $time_format = $dateCarboon->isoFormat('MMMM Do YYYY, h:mm:ss a');
        // $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];


        return view('posts.show', [
            'post' => $post,
            'time_format' => $time_format
        ]);
    }


 // Create and Store
    public function create()
    {
        
        // $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];

        return view('posts.create', [
            'users' => User::all()
        ]);
        // return view('posts.create');
    }
    
    public function store(Request $request)
    {
        //logic for saving in db
         $data = request()->all();
        //  dd($data);
//Validation
        $validated = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

         //Insert Into Database
        //  Post::create([
        //      'title' => $data['title'],
        //      'description' => $data['description'],
        //  ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }




// Edit and Update
    public function edit($post)
    {
        // $post =['id' => 1, 'title' => 'First User', 'email' => 'Omnia@gmail.com', 'description' => 'This Is First description', 'posted_by' => 'Omnia', 'created_at' => '2000-01-01'];
        $post = Post::find($post);
        return view('posts.edit', [
            'users' => User::all(),
            'post' => $post
        ]);
    }
    public function update($post,Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $user_id = $request->get('user_id');

        //logic for saving in db
        // $input = Post::get('title');   
        // $data = request()->all();
        $post = Post::find($post);
        $post->title = $title;
        $post->description = $description;
        $post->user_id = $user_id;
        $post->save();

        return redirect()->route('posts.index');

    }

//Delete
    public function destroy($post)
    {
        // dd($post);
        // return redirect()->route('posts.destroy');

        
        // $post = Post::find($post);
        // return view('posts.destroy', [
            
        //     'post' => $post
        // ]);

        // $title = $request->get('title');
        // $description = $request->get('description');
        // $user_id = $request->get('user_id');

        Post::destroy($post);
        return redirect()->route('posts.index');

        // $post->title = $title;
        // $post->description = $description;
        // $post->user_id = $user_id;
        // dd($post);
        // $post->delete();
        // return view('posts.destroy', [
            
        //     'post' => $post
        // ]);
        // return redirect()->route('posts.destroy');

    }

}

