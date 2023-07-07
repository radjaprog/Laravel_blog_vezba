<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;
use App\Models\Tag;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }


    public function index()
    {
        $posts = Post::published();

        info($posts);

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::with('comments', 'user')->find($id);
        // dd($post);                  
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $tags = Tag::all();

        return view('posts.create', ['tags' => $tags]);
    }

    public function store(CreatePostRequest $request)
    {
        // request()->validate([            
        //     'title' => 'required|min:4',
        //     'body' => 'required|min:20',
        // ]);  

        $validated = $request->validated();

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        info($post);

        $post->tags()->attach($request['tags']);
        // 

        // a mogu i da kazem:   gde dobijemo novi objekat 
        //      $post =  Post::create( [            
        //  'title' => request('title'),
        //  'body' => request('body'),
        //  'published' => true,
        //      ]);

        // $post = new Post();             
        // $post->title = request('title');
        // $post->body = request('body');

        // $post->save();

        return redirect('/posts');
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->
