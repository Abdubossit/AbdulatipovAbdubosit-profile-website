<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\NewController;

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



 Route::get('blog', [NewController:: class, 'index']);