<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::all();
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $tags = \App\Tag::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// dd(request()->all());

        //add max
        $validatedData=$request->validate([
            'title' => 'required|max:256',
            'category_id' => 'required',
            'body' => 'required|max:1000',
            'image' => 'max:20000|mimes:png,jpeg,bmp,webp'
        ]);

        $categories = \App\Category::all();

        $post = new \App\Post;

        if ($image = $request->file('image')) {
          $path = Storage::disk('s3')->putFile('images', $image, 'public');
          $post->image = $path;
        }

        $categories = \App\Category::all();

        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');
        $post->status = 0;
        $post->creator_id = \Auth::user()->id;
        $post->save();
        $request->session()->flash('status', 'Post created! Please allow up to 24 hours for post to appear.');
        return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $posts = \App\Post::all();
    //     return view('posts.index', compact('posts'));
    // }

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

      if (\Auth::user()->role_id == 1 || $post->creator_id == \Auth::user()->id) {
        return view('posts.edit', compact('post', 'categories'));
      }
      else
      {
          return redirect()->route('/');
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
      $post = \App\Post::find($id);

      if (\Auth::user()->role_id == 1 || $post->creator_id == \Auth::user()->id) {

        $validatedData = $request->validate([
          'title' => 'required|max:256',
          'category_id' => 'required',
          'body' => 'required|max:1000',
          'image' => 'max:20000|mimes:png,jpeg,bmp,webp'
        ]);
        $category = \App\Category::all();

        $post = \App\Post::find($id);
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->tag = $request->input('tag');
        $post->status = 0;
        if ($image = $request->file('image')) {
          $path = Storage::disk('s3')->putFile('images', $image, 'public');
          $post->image = $path;
        }
        $post->body = $request->input('body');


        $post->save();
        $request->session()->flash('status', 'You updated your post!');
        return redirect()->route($post->category_page());
      }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $post = \App\Post::find($id);

      if (\Auth::user()->role_id == 1 || $post->creator_id == \Auth::user()->id) {

        if ($image = $post->image) {
          $path = Storage::disk('s3')->delete('images', $image);
        }
        $post->delete();

        // Storage::delete('file.jpg');



        return redirect()->route($post->category_page());

    } else {
            // $request->session()->flash('status', 'You don\'t have permission to delete this post.');
            return redirect()->route('/');
        }
    }


    // this function is to allow admins to approve posts before publishing

    public function approvePost(Request $request, $post_id)
    {
      if (\Auth::user()->role_id == 1) {
        $post = \App\Post::find($post_id);
        $post->status = 1;
        $post->save();
      }
    }

    public function unapprovePost(Request $request, $post_id)
    {
      if (\Auth::user()->role_id == 1) {
        $post = \App\Post::find($post_id);
        $post->status = 0;
        $post->save();
      }
    }




}
