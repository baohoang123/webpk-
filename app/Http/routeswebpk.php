<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'webpkcontroller@admin');