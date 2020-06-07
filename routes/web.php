<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/survival', function () {
//     return view('survival');
// });

// Route::get('/survivals', function () {
//     return "whats up";
// });



// Route::get('/json', function () {
//     return ['foo' => 'bar'];
// });

// Route::get('/test', function () {
//     return view('test');
// });



// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//          'my-first-post' => 'Hello, this is my first blog post !',
//          'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry that post was not found.');
//     };

//     return view('posts', [
//         'posts' => $posts[$post]
//     ]);
// });


Route::get('/posts/{post}', 'PostsController@show');

