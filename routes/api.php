<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function() {
    // User
    Route::get('/userlist', 'UserController@getUserList');
    Route::get('/user/{uid}', 'UserController@getUserInfo');

    // Article
    //Route::get('/articlelist', 'ArticleController@getList'); 
    //Route::get('/article', 'ArticleController@getOne');

    // Comment
    Route::get('/comments', 'CommentsController@getComments');

    // Category
    Route::get('/getcategorylist', 'CategoryController@getCategory');
    Route::get('/addcategory', 'CategoryController@addCategory');
    Route::get('/updatecategory', 'CategoryController@updateCategory');
    Route::get('/deletecategory', 'CategoryController@delCategory');

    // Error
    Route::get('/error/{errorCode}', 'ErrorController@getErrorPage');

});


Route::group(['namespace' => 'REST'], function() {
    // User
    Route::get('/userlist', 'UserController@getUserList');
    Route::get('/user/{uid}', 'UserController@getUserInfo');

    // Article
    Route::get('/articles', 'ArticleController@index');
    Route::get('/articles/{id}', 'ArticleController@show');
    Route::post('/articles', 'ArticleController@store');
    Route::put('/articles/{id}', 'ArticleController@update');
    Route::delete('/articles/{id}', 'ArticleController@delete');

    // Comment

    // Category
    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/{id}', 'CategoryController@show');
    Route::post('/categories', 'CategoryController@store');
    Route::put('/categories/{id}', 'CategoryController@update');
    Route::delete('/categories/{id}', 'CategoryController@delete');


    // Error

});

