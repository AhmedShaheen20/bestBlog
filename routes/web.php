<?php
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('test');
Route::get('/login', function () {
    return 'you must be login';
})->name('login');
Route::get('/','IndexController@index');
Route::get('/about','IndexController@about');
Route::get('/servises','IndexController@servises');
//route posts
Route::get('/posts','PostController@index' )->name('posts.index');

// route create post
Route::get('/posts/create','PostController@create')->name('posts.crate');
Route::post('/posts','PostController@store')->name('posts.store'); // فانكشن خاصة بالتخزين

// route edit and update post
Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostController@update')->name('posts.update');

// route create delete
Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');


// route show post
Route::get('/posts/{id}','PostController@show' )->name('posts.show');

// route comment

        Route::get('/comments','CommentController@index' )->name('comments.index');

        // route create post
        Route::get('/comments/create','CommentController@create')->name('comments.crate');
        Route::post('/comments','CommentController@store')->name('comments.store'); // فانكشن خاصة بالتخزين

        // route edit and update post
        Route::get('/comments/{id}/edit','CommentController@edit')->name('comments.edit');
        Route::put('/comments/{id}','CommentController@update')->name('comments.update');

        // route create delete
        Route::delete('/comments/{id}','CommentController@destroy')->name('comments.destroy');


        // route show post
        Route::get('/comments/{id}','CommentController@show' )->name('comments.show');



























Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('news', 'NewsController');

