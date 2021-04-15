<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Mail\MyMail;
use App\Http\Controllers\NewController;
use App\Http\Controllers\OldController;
use App\Http\Controllers\MailController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Abdu', function () {
    return view('Abdu');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/post/create', function () {
    DB::table('post')->insert([
    'title'=>'IT Technologys.',
    'body'=>' Information technology (IT) is the use of computers to store, retrieve, transmit, and manipulate data or information.  '
    ]);
 });



 Route::get('post', [NewController:: class, 'index']);
 
 Route::get('blog/index', function(){
     return view('client.create');
 });

 Route::post('blog/create', [NewController:: class,'store'])->name('add-client');

 Route::get('/post/{id}', [NewController::class, 'get_client']);


 Route::post('blog/creates', [OldController::class, 'store'])->name('add-post');
 Route::get('blog/gmail', [OldController::class, 'index']);

 Route::get('blog/creates', function(){
    return view('form');
});

 
Route::get('mail',[MailController::class,'send']);

Route::get('example/{lang}',function($lang){
    App::setlocale($lang);
    return view('home');
});