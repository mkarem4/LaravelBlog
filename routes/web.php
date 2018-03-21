<?php



/* post routes */
Route::get('/','PostsController@index')->name('home');
Route::get('/home','PostsController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function (){

    Route::get('/posts/create','PostsController@create');
    Route::post('/posts','PostsController@store');
    Route::post('/posts/{post}/comments','CommentsController@store');
    Route::get('/logout','SessionsController@destroy');
    Route::get('/notification',function(){
        return view('notifications.notification');
    });


});
Route::get('/posts/{post}','PostsController@show');


/* comments route */

/* tags */
Route::get('/posts/tags/{tag}','TagsController@index');


/* login, registeration and logout */

Route::group(['middleware' => ['web', 'guest']], function () {

    Route::get('/register', 'RegisterationController@create');
    Route::post('/register', 'RegisterationController@store');

    Route::get('/login', 'SessionsController@create')->name('login');
    Route::post('/login', 'SessionsController@store');

});