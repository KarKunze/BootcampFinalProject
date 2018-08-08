<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller {

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }



    public function getIndex() {
      // process variable data or params
      // talk to the model
      // receive from the model
      // compile or process data from the model
      // pass that data to the correct view
        $posts = \App\Post::latest()->where ('creator_id', '=', '2')->paginate(1);
        return view('pages.index', compact('posts'));
    }

    public function getAbout() {
        $first = 'Moody';
        $middle = 'in the';
        $last = 'City';
        $fullname = $first . " " . $middle . " " . $last;
        return view('pages.about')->withFullname($fullname);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getArt() {
        $posts = \App\Post::latest()->where ('status', '=', 'true')->where ('category_id', '=', '1')->paginate(5);
        return view('pages.art', compact('posts'));
    }

    public function getMusic() {
        $posts = \App\Post::latest()->where ('status', '=', 'true')->where ('category_id', '=', '2')->paginate(5);
        return view('pages.music', compact('posts'));
    }

    public function getPlaces() {
        $posts = \App\Post::latest()->where ('status', '=', 'true')->where ('category_id', '=', '3')->paginate(5);
        return view('pages.places', compact('posts'));
    }

    public function getLocal() {
        $posts = \App\Post::latest()->where ('status', '=', 'true')->where ('category_id', '=', '5')->paginate(5);
        return view('pages.local', compact('posts'));
    }

    public function getEatdrink() {
        $posts = \App\Post::latest()->where ('status', '=', 'true')->where ('category_id', '=', '4')->paginate(5);
        return view('pages.eatdrink', compact('posts'));
    }


    public function getCreate() {
        $categories = \App\Category::all();
        return view('posts.create');
    }

    public function getEdit() {
        $posts = \App\Post::all();
        return view('posts.edit');
    }



}







 ?>
