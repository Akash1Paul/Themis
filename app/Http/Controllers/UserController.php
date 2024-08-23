<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
      return view('user.login');
    }
    public function home()
    {
      $post = Post::get()->last();
        // Share button 1
        $shareButtons1 = \Share::page($post->link)
    ->facebook()
    ->twitter()
    ->telegram()
    ->whatsapp();
      return view('user.home')->with(compact('post','shareButtons1'));
    }
    public function profile()
    {
      $profile = User::where('email',auth()->user()->email)->first();
      return view('user.profile')->with(compact('profile'));
    }
}
