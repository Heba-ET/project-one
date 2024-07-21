<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClasseController;

Route::get('classes/add', [ClasseController::class, 'create'])->name('classes.create');
Route::post('classes', [ClasseController::class, 'store'])->name('classes.store');

Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('cars', [CarController::class, 'store'])->name('cars.store');
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

// Route::prefix('accounts')->group(function() {
//     Route::get('admin', function () {
//         return "admin is Heba";
//     });
//     Route::get('user', function () {
//         return "user is Heba";
//     }); 
// });

// Route::prefix('cars')->group(function() {
//     Route::get('usa/ford', function () {
//         return "car type is ford";
//     });
//     Route::get('usa/tesla', function () {
//         return "car type is tesla";
//     });
//     Route::get('ger/mercedes', function () {
//         return "car type is mercedes";
//     });
//     Route::get('ger/audi', function () {
//         return "car type is audi";
//     });
//     Route::get('ger/volkswagen', function () {
//         return "car type is volkswagen";
//     });    
// });

// Route::get('cv', function () {
//     return view('cv');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('link', function () {
//     $url = route('w');
//     return "<a href='$url'>go to welcome</a>";
// });

// Route::get('welcome', function () {
//     return "welcome to laravel";
// })->name('w');

// Route::get('login', function () {
//     return view('login');
// });
// Route::post('data', function () {
//     return 'data inserted successeful';
// })->name('data');

// Route::get('contact', function () {
//     return view ('contact');
// });
// Route::post('data', function () {
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $content=$_POST['content'];
//     $message=$_POST['message'];
//     return $name .  $email . $content . $message;
// })->name('data');
