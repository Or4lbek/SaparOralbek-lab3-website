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
}
