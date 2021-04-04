<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Person;

class UploadController extends Controller
{
    //
    public function index(Request $req){
    
        $allowedFileExtensions = ['png','jpg'];
        $file = $req->file('file');
        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension, $allowedFileExtensions);

        if($check) {
            Person::create([
                'name' => $req->name,
                'surname' => $req->surname,
                'email' => $req->email,
                'image' => $req->file
            ]);
            $file->store('files');
            
            Mail::to($req->email)->send(new WelcomeMail());
            return 'successfully added';
        }
        return 'failed to upload';
    }
    
}
