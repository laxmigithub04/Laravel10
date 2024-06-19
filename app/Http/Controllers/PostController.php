<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);

        $newPost = Post::create($data);
        return redirect(route('post.index'));
    }

    public function edit(Post $post){
        return view('posts.edit',['post' => $post]);
    }

    public function update(Post $post, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'contact' => 'required',
        ]);
        
        $post->update($data);
        return redirect(route('post.index'))->with('success', 'Updated Succesfully');
    }

    public function destroy(Post $post){
     $post->delete();
     return redirect(route('post.index'))->with('success', 'Deleted Succesfully');
    }


}
