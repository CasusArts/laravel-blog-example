<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comments;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

      $this->validate(request(), ['body' => 'required|min:2']);
      $post->addComment(request('body'));
        // Comments::create([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        // ]);

        // $post->comments()->create(['body' => request('body')]);

        return back();
    }
}
