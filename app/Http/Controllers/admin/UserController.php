<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
      public function index()
    {
      $users = User::orderBy('created_at', 'desc')->get();
      return view('admin.user.index')->withUsers($users);
    }
}
