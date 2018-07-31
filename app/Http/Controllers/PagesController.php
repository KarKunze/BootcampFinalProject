<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
      // process variable data or params
      // talk to the model
      // receive from the model
      // compile or process data from the model
      // pass that data to the correct view
        return view('pages.index');
    }

    public function getAbout() {
        $first = 'Karla';
        $last = 'Kunze';
        $fullname = $first . " " . $last;
        return view('pages.about')->withFullname($fullname);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getArt() {
        return view('pages.art');
    }

    public function getMusic() {
        return view('pages.music');
    }

    public function getPlaces() {
        return view('pages.places');
    }

    public function getLocal() {
        return view('pages.local');
    }

    public function getEatdrink() {
        return view('pages.eatdrink');
    }

    public function getCreate() {
        return view('posts.create');
    }


}







 ?>
