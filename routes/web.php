<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('page')->group( function () {
    
    Route::get('about', function() {
        return view('about_us');
    })->name('about_us');

    Route::get('first', function() {
        return view('first_page');
    })->name('first_page');

    Route::get('second', function(){
        return view('second_page');
    })->name('second_page');
});