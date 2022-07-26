<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $post;
    public function index()
    {

        return view('post');
    }
    public function allPosts()
    {
        $posts = Post::all();
        return view('all-post', compact('posts'));
    }
    public  function addPost(Request $req)
    {

        Post::create(
            [
                'title' => $req['title'],
                'body' => $req['body'],
            ]
            );
            return redirect('/all-posts');
    }
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }
    public  function updatePost(Request $req, $id)
    {
         $post = Post::find($id);
         $post->update($req->all());
         return redirect('/all-posts');
    }
}
