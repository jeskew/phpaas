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

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => 'api'), function ()
{
    Route::get('strtotime/{time}/{format?}', function($time, $format = null)
    {
        return Response::json(array(
            'string' => $time,
            'format' => $format,
            'out' => $format ? date($format, strtotime($time)) : strtotime($time)
        ));
    });
});