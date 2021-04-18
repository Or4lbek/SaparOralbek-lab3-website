<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    //
    public function update($locale){
        app()->setLocale($locale);
        return redirect()->back();
    
    }
}
