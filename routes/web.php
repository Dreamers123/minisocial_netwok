<?php

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
Route::get('/try',  'ArticlesController@tryit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
