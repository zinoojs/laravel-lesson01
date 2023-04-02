<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homes', [HomeController::class, 'index'])->name('homes.index');
Route::get('/abouts', [AboutController::class, 'index'])->name('abouts.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Route::get('/home', function () {
//     // return view('home', ['name' => 'bobo']);
//     return view('home', ['users44' => ['bobo', 'mgmg', 'koko', 'nono']]);
// });


// Route::resource('homes', HomeController::class);
// Route::get("/home", function () {
//     return view('home');
// })->middleware('age');

// Route::get('/user/{id?}', function (string $id = null) {
//     return 'User ' . $id;
// });
// Route::get('/posts/{post?}/comments/{comment?}', function (string $postId = "100", string $commentId = null) {
//     // ...
//     return " bo bo create postid" . $postId . "and  mgmg comment in commentid" . $commentId;
// });

// Route::get('/user/{name}', function (string $name) {
//     // ...
//     return "hello $name";
// })->where('name', '[A-Za-z]+');
