<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index() {

    return view('post_index');

  }

  public function create() {

    return view('post_create');

  }

  public function store(request $request) {

    $data = $request -> validate([

      'title'    => 'required|min:3|max:15',
      'text'     => 'required|min:10',
      'category' => 'required|min:3|max:15',
      'like'     => 'required|gte:0',
      'dislike'  => 'required|gte:0'

    ]);
    $post = Post::create($data);

    return redirect() -> route('post_index');

  }

}
