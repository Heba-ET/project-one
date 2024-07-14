<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/w', function () {
//     return "Hello Laravel";
// });

// Route::get('car/{id?}', function ($id=0) {
//     return "car number is" . $id;
// })->where([
//     'id' => '[0-9]+'    
// ]);

// Route::get('user/{name}/{age?}', function ($name,$age=0) {
//     return "Username is" . $name . "and age is" . $age;
// })->whereAlpha('name')->whereNumber('age');

Route::prefix('accounts')->group(function() {
    Route::get('admin', function () {
        return "admin is Heba";
    });
    Route::get('user', function () {
        return "user is Heba";
    }); 
});

Route::prefix('cars')->group(function() {
    Route::get('usa/ford', function () {
        return "car type is ford";
    });
    Route::get('usa/tesla', function () {
        return "car type is tesla";
    });
    Route::get('ger/mercedes', function () {
        return "car type is mercedes";
    });
    Route::get('ger/audi', function () {
        return "car type is audi";
    });
    Route::get('ger/volkswagen', function () {
        return "car type is volkswagen";
    });    
});