<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Request $request){
        $posts = post::all();

        return response($posts, 200);
    }//this function returns thal all client rows

    //return post with id
    public function get_post(Request $request){
        $posts = post::find($request->post_id);

        if($posts == null){
            return response(['message' => 'There is no post'], 404);
        }

        return response($posts, 200);
    }
}
