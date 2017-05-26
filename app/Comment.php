<?php

namespace App;

class Comment extends Model
{
    // comments belongs to one post
    public function post()
    {
      return $this->belongsTo(Post::class);
    }
    
    // comment belongs to one user
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
