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


}
