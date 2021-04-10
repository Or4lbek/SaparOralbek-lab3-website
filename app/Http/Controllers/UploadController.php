<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Person;
use App\Models\post;

class UploadController extends Controller
{
    //
    public function index(Request $req){
    
        $allowedFileExtensions = ['png','jpg'];
        $file = $req->file('file');
        $extension = $file->getClientOriginalExtension();
        $test = in_array($extension, $allowedFileExtensions);

        if($test) {
            Person::create([
                'name' => $req->name,
                'surname' => $req->surname,
                'email' => $req->email,
                'image' => $req->file,
            ]);

            post::create([
                'title' => $req->name,
                'body' => $req->surname
            ]);
            $file->store('files');  
            
            Mail::to($req->email)->send(new WelcomeMail());
            return view('index');
        }
        return 'failed to upload';
    }
    
}
