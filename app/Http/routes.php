<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@welcome');

Route::get('/create', 'ProjectController@create');

Route::post('/student/store', 'StudentsController@store');

Route::post('/students', 'ProjectController@storeProject');

Route::get('/upload', 'FilesController@upload');

Route::post('/upload/handle', 'FilesController@handleUpload');

Route::get('/singleStudent', 'StudentsController@singleStudent');

Route::post('/storeSingleStudent', 'StudentsController@storeSingleStudent');

Route::get('/advancedProject', 'AdvancedProjectController@create');

Route::post('/storeAdvancedProject', 'AdvancedProjectController@storeAdvancedProject');