<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function posts()
  {
      // any post has many tags
      // any tag may applied to many Post

      return $this->belongsToMany(Post::class);
  }


  public function getRouteKeyName()
  {
     return 'name';

  }
}
