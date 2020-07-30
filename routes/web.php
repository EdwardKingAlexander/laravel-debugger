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

use App\Http\Controllers\ApiSearchController;

Auth::routes();

Route::get('/', 'ProjectController@index');
Route::resource('projects', 'ProjectController');
Route::resource('projects/{project}/bugs','BugController');
Route::resource('projects/{project}/features', 'FeatureController');
Route::PUT('api/projects/{project}/features/{feature}', 'FeatureApiController@update');
Route::PUT('api/projects/{project}/bugs/{bug}', 'BugApiController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
