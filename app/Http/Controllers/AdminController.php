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
      $posts = \App\Post::latest()->paginate(10);
      // $posts = \App\Post::latest()->where ('status', '=', '0')->paginate(10);
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
        return view('admin.index', compact('posts'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $post = \App\Post::find($id);
      $categories = \App\Category::all();

      if (\Auth::user()->role_id == 1) {
        return view('admin.index', compact('post', 'categories'));
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

      if (\Auth::user()->role_id == 1) {
        $post = \App\Post::find($id);
        $post->status = $request->input('status');

        $post->save();
        $request->session()->flash('status', 'You updated the post status!');
        return view('admin.index');
      }
    }


}
