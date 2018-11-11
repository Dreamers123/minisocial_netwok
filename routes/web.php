<?php


use Illuminate\Support\Facades\Input;



Route::get('/', function () {
    return view('welcome');
});

Route::GET('admin/home','AdminController@index');

Route::GET('admin/editor','EditorController@index');
Route::GET('admin/test','EditorController@test');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');










Route::get('/profile/{username}', 'ProfileController@profile');
Route::get('/profile/{username}/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');
Route::get('/profile/{id}/edit', 'ProfileController@edit');
Route::put('/profile/{id}', 'ProfileController@update');

Route::get('/onetone', function ()
{
    return App\Profile::find(1)->user->image_link;
    return App\User::find(1)->profiles;
});

Route::get('/users', function ()
{
    $user=App\User::find(4)->articles;
    return App\Article::get()->first()->user;
});
Route::get('/dynamic/{id}/{name}', function ($id,$name)
{
    return 'This is user id:'.$id.' and the name is '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::redirect('/here', '/there', 301);
Route::resource('articles','ArticlesController');
Route::any('article_search','ArticlesController@search');
Route::any('movie_search','MoviesController@search');

Route::resource('movies','MoviesController');
Route::post('/articles/{article}/comments', 'CommentsController@store');
Route::get('/try',  'ArticlesController@tryit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('user/{id}','AdminController@delete');
Route::delete('movie/{id}','AdminController@deletemovie');
Route::delete('article/{id}','AdminController@deletearticle');

Route::get('admin/users','AdminController@showusers');
Route::get('admin/movies','AdminController@showmovies');
Route::get('admin/articles','AdminController@showarticles');


