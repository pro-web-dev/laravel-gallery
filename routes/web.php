<?php


Route::get('/', 'GalleryController@index');

Route::resource('gallery', 'GalleryController');
