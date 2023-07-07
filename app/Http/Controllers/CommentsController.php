<!-- Drugi Laravelov projekat Blog - vezbe -->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(CreateCommentRequest $request, $id)
    {


        $post = Post::find($id);
        $post->addComment($request->validated()['body']);

        if ($post->user) {
            Mail::to($post->user)->send(new CommentReceived($post));
        }



        // Comment::create( [                // drugi nacin
        //     'post_id' => $id,           
        //     'body' => request('body'),
        // ]);

        return redirect()->back();
    }
}

// Post::find($id)->comments  
// Post::find($id)->comments()->create([]);  