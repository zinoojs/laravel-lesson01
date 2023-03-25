<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home", function () {
    return view('home');
});

// Route::get('/user/{id?}', function (string $id = null) {
//     return 'User ' . $id;
// });
Route::get('/posts/{post?}/comments/{comment?}', function (string $postId = "100", string $commentId = null) {
    // ...
    return " bo bo create postid" . $postId . "and  mgmg comment in commentid" . $commentId;
});

Route::get('/user/{name}', function (string $name) {
    // ...
    return "hello $name";
})->where('name', '[A-Za-z]+');