<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\post;

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
        'title' => 'The just Title',
        'body' => 'the just body'
    ]);  
});

Route::get('/post', function () {
    $post = post::find(1);
    return $post->title;
}); 