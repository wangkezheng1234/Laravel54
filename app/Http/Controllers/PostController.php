<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts = [
            ['title'=>'this is title1','author'=>'this is author1','content'=>'this is content1'],
            ['title'=>'this is title2','author'=>'this is author2','content'=>'this is content2'],
            ['title'=>'this is title3','author'=>'this is author3','content'=>'this is content3'],
        ];
        return view("post/index",array('posts'=>$posts));
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
