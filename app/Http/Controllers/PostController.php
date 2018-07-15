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

    function show(){
        $data = array('a'=>'this is a','show'=>'false');
        return view("post/show",$data);
    }
    function store(){
        
    }
    function edit(){
        return view("post/edit");
    }
    function update(){
        
    }
    function delete(){
        
    } 
}
