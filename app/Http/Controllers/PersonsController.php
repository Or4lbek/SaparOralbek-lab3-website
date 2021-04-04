<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonsController extends Controller
{
    //
    public function index(){
        $post = Person::all();

        return view('post.index')->with(['post' => $post]);
    }
}
