<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function getAdmin() {

    if (\Auth::user()->role_id == 1) {
      $posts = \App\Post::latest()->get();
      $categories = \App\Category::all();
      $users = \App\User::all();
      return view('admin.index', compact('posts', 'categories', 'users'));
    }
    else
    {
        return redirect()->route('index');
    }
  }


    public function index()
    {
        $posts = \App\Post::all();
        return view('admin', compact('posts'));
    }


    public function edit($id)
    {
      $post = \App\Post::find($id);
      $categories = \App\Category::all();

      if (\Auth::user()->role_id == 1) {
        return view('admin', compact('post', 'categories'));
      }
    }


    public function update(Request $request, $id)
    {

      if (\Auth::user()->role_id == 1) {
        $post = \App\Post::find($id);
        $post->status = $request->input('status');

        $post->save();
        $request->session()->flash('status', 'You updated the post status!');
        return redirect()->route($post->admin);
      }
    }


}
