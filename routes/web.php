<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::any('{catchall}', function () {
    return response()->view('404', [], 404);
})->where('catchall', '.*');


// Route::get('/', function () {
//     return view('welcome');
// });
