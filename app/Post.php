<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {

        $this->comments()->create(compact('body'));
        // Comments::create([
        //   'body' => $body,
        //   'post_id' => $this->id
        // ]);
    }
}
