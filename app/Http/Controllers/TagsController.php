<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        //$tag = Tag::find($id);  
        //$tag = Tag::where('name', $name)->firstOrFail();    
        $posts = $tag->posts;   // drugi upit ka bazi, 

        return view('posts.index', compact('posts'));
    }
}

// <!-- Drugi Laravelov projekat Blog - vezbe -->
