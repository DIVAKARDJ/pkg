<?php

use Divakar\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Divakar\Contact\Http\Controllers'], function () {
    Route::get('contact','ContactController@index')->name('contact');

    Route::post('contact','ContactController@send');    
});
