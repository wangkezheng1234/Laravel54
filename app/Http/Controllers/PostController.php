<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    function index(){
        $posts = Post::orderby('id')->paginate(5);
        return view("post/index",compact('posts'));
    }
    function create(){
        return view("post/create");
    }

    function show(Post $post){
        return view("post/show",compact('post'));
    }
    function store(){
        $this->validate(request(),[
            'title'=>'required|string|min:10',
            'content'=>'required|string|min:10',
        ],['title.min'=>'文章标题过短！']);
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        return redirect('/posts');
    }
    function edit(Post $post){
        return view("post/edit",compact('post'));
    }
    function update(){
        echo 400;
    }
    function delete(){
        
    } 
}
