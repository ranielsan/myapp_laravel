<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('posts/delete/{post}', 'PostsController@destroy');
Route::get('/posts/edit/{post}', 'PostsController@edit')->name('edit');  //{{ route('edit')}} 
Route::post('/posts/update', 'PostsController@update')->name('update');


Route::post('posts/{post}/comments', 'CommentsController@store');

Route::post('/posts/{post}/upload', 'FileController@store');
Route::get('posts/deletefile/{post}', 'FileController@destroy')->name('deletefile');
Auth::routes();
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');







