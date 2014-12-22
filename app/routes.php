<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
# Book Resource
Route::resource('books', 'BookController');

# Root routes
Route::get('/', function()
{
	return View::make('books.index');
});

# Get php info
Route::get('/info', function()
{
	return View::make('info');
});
# Get database conectivity
Route::get('/db', function(){ 
  return DB::select('select database();');
});