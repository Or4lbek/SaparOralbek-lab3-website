<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PersonsController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/coffee', function () {
    return view('second_page');
})->name('coffee');
Route::get('/order_online', function () {
    return view('third_page');
})->name('order');
Route::get('/contacts', function () {
    return view('fourth_page');
})->name('contacts');

Route::get('client/add', function(){
    DB::table('clients')->insert([
        'name' => 'Oralbek',
        'surname' => 'Sapar',
        'age' => 19
    ]);
});
Route::get('client', function(){
    $client = Client::find(1);
    return $client->surname;
});

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'The  Title3',
        'body' => 'the  body 4'
    ]);  
});

Route::get('/blog', [BlogController::class, 'index']); 

Route::get('/blog/create', function(){
    return view('post.create');
});
Route::post('/blog/create', [BlogController::class, 'store'])->name('add-blog');        

Route::get('/post/{id}', [BlogController::class, 'get_post']);

Route::get('/email', function () {

    Mail::to('email@email.com')->send(new WelcomeMail());

    return new WelcomeMail();
});

/*Route::get('upload', function () {
    return view('upload');
});*/
Route:: view('/upload', 'upload');

Route::post('/upload',[UploadController::class, 'index']); 

Route::get('/persons', [PersonsController::class, 'index']); 

Route::get('/{lang}',function($lang){
    App::setlocale($lang);
    return view('index');
});
Route::get('coffee/{lang}',function($lang){
    App::setlocale($lang);
    return view('second_page');
});
Route::get('order_online/{lang}',function($lang){
    App::setlocale($lang);
    return view('third_page');
});
Route::get('contacts/{lang}',function($lang){
    App::setlocale($lang);
    return view('fourth_page');
});

Route::get('/{lang}', [LocalizationController::class,'index']);
