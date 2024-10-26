<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//1-define a new route so the user can access it throw browser
//2-define controller that renders a view
//3-define view that contains list of posts
//4-remove static html data from the view
Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostsController::class,'create'])->name('posts.create') ;
Route::post('/posts',[PostsController::class,'store'])->name('posts.store');
//.....................................
//then comes dynamic routes
Route::get('/posts/{post}',[PostsController::class,'show'])->name('posts.show');
Route::get('/posts/{post}/edit',[PostsController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}',[PostsController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}',[PostsController::class,'destroy'])->name('posts.destroy');
//database
//1.structure change for DB(create table,edit column/row)
//2.operations on database(insert record, edit record, delete record)