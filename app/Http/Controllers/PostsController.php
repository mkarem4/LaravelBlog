<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//use App\Tag;

class PostsController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except(['index','show']);
  }


  public function index()
  {

    $posts = Post::latest()
      ->filter(request(['month','year']))
      ->get();
    return view ('posts.index',compact('posts'));
  }

  public function create()
  {
    return view ('posts.create');
  }

  public function show(Post $post)
  {
      //return response()->json($post);
    return view ('posts.show',compact('post'));
  }

  public function store()
  {
      // validation
      $this->validate(request(),[
        'title' => 'required',
        'body' => 'required'
      ]);

      auth()->user()->publish(
        new Post(request(['title','body']))
      );

      session()->flash('message' , 'Your Post has been published.');

      return redirect('/');
  }
}
