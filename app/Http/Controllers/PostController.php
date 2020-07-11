<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function openPage($slug){
        $post = Post::where('slug', $slug)->first();

        if(!$post) return view('layouts.404');

        return view('page.index', compact('post'));
    }

    public function index(){
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function create(){
        $type = 'create';
        return view('post.create', compact('type'));
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required'
        ]);

        Post::updateOrCreate(['id' => $request->id], [
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'category_id' => 0
        ]);      

        return redirect()->route('post.index')->with('info', 'post succesfully added');
    }

    public function edit($id){
        $post = Post::find($id);
        $type = 'edit';
        return view('post.create', compact('type', 'post'));
    }

    public function update(){
        
    }

    public function delete($id){

    }

    public function show(){
        
    }
}
