<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function posts()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('admin.posts')->with(compact('posts'));
    }
    public function addPost()
    {
        return view('admin.addPost');
    }
    public function savePost(Request $request)
    {
      $posts = new Post();
      $posts->text = $request->text;
      $posts->link = $request->link;
        if ($request->hasfile('photo_video')) {
            $file = $request->file('photo_video');
            $extension = $file->getclientoriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('photo_video/', $filename);
            $posts->photo_video = $filename;
        }
    $posts->save();
    return redirect('admin/posts')->with('msg','Post is added');
    }
    public function editPost(Request $request,$id)
    {
        $post = Post::find($id);
        return view('admin.editPost')->with(compact('post'));
    }
    public function updatePost(Request $request,$id)
    {
      $posts = Post::find($id);
      $posts->text = $request->text;
      $posts->link = $request->link;

        if ($request->hasfile('photo_video')) {
            $file = $request->file('photo_video');
            $extension = $file->getclientoriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('photo_video/', $filename);
            $posts->photo_video = $filename;
        }
    $posts->update();
    return redirect('admin/posts')->with('msg','Post is updated');
    }
    public function deletePost($id)
    {
        $posts = Post::find($id);
        $file =public_path('photo_video/'.$posts->photo_video);
        $img=File::delete($file);
        $posts ->delete();
        return redirect('admin/posts')->with('msg','Post is deleted');
    }

    public function users()
    {
        $users = User::orderBy('created_at','desc')->where('roles',0)->get();
        return view('admin.users')->with(compact('users'));
    }
    public function delete($id)
    {
      User::find($id)->delete();
      return redirect('admin/users')->with('msg','User is deleted');
    }
}

