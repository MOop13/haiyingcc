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

/**
 * 前台
 */

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Api'], function() {
    // User
    Route::get('/index', 'UserController@getUserInfo');

    // Article
    Route::get('/articlelist', 'ArticleController@getList'); 
    Route::get('/article', 'ArticleController@getOne');

    // Comment
    Route::get('/comments', 'CommentsController@getComments');
});




/**
 * 后台
 */






