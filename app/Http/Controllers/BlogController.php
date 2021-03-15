<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class BlogController extends Controller
{
    public function index(){
        $post = post::all();

        return view('post.index')->with(['post' => $post]);
    }

    public function store(Request $request){
        //dd($request);
        post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();
    }
    public function get_post($id){
        $post = post::find($id);

        if($post == null){
            return response(['message' => 'post not found'], 404);
        } 

        return view('post.detail')->with(['post' => $post]);
    }
}
