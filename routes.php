<?php

/**
 * Your package routes would go here
 */
Route::get('contact', 'xiaolu\dgg\Http\Controllers\ContactController@index');
Route::get('admin', function () {
    return view('courier::admin');
});