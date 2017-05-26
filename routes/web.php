<?php



/* post routes */
Route::get('/','PostsController@index')->name('home');
Route::get('/home','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');


/* comments route */
Route::post('/posts/{post}/comments','CommentsController@store');


/* login, registeration and logout */
Route::get('/register','RegisterationController@create');
Route::post('/register','RegisterationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');
