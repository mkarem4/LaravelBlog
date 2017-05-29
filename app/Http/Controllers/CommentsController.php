<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }
    public function store(Post $post)
    {
      $this->validate(request(),['body'=>'required|min:2']);
      $post->addComment(request('body'));
      return back();
    }
}
