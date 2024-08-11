<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\ProductController;

Route::prefix('classes')->group(function() {
    Route::get('', [ClasseController::class, 'index'])->name('classes.index');
    Route::get('create', [ClasseController::class, 'create'])->name('classes.create');
    Route::post('', [ClasseController::class, 'store'])->name('classes.store');
    Route::get('{class}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
    Route::put('{class}', [ClasseController::class, 'update'])->name('classes.update');
    Route::delete('{id}/delete', [ClasseController::class, 'destroy'])->name('classes.destroy');
    Route::get('trashed', [ClasseController::class, 'showDeleted'])->name('classes.showDeleted');
    Route::patch('{id}', [ClasseController::class, 'restore'])->name('classes.restore');
    Route::delete('{id}', [ClasseController::class, 'forceDelete'])->name('classes.forceDelete');
}); 

Route::prefix('cars')->group(function() {
    Route::get('', [CarController::class, 'index'])->name('cars.index');
    Route::get('create', [CarController::class, 'create'])->name('cars.create');
    Route::post('', [CarController::class, 'store'])->name('cars.store');
    Route::get('{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::get('show/{id}', [CarController::class, 'show'])->name('cars.show');
    Route::put('{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('{id}/delete', [CarController::class, 'destroy'])->name('cars.destroy');
    Route::get('trashed', [CarController::class, 'showDeleted'])->name('cars.showDeleted');
    Route::patch('{id}', [CarController::class, 'restore'])->name('cars.restore');
    Route::delete('{id}', [CarController::class, 'forceDelete'])->name('cars.forceDelete');
    
});

Route::prefix('products')->group(function() {
   Route::get('', [ProductController::class, 'index'])->name('products.index');
   Route::get('create', [ProductController::class, 'create'])->name('products.create');
   Route::post('', [ProductController::class, 'store'])->name('products.store');
   Route::get('{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
   Route::put('{product}', [ProductController::class, 'update'])->name('products.update');
});

Route::get('index', [ExampleController::class, 'index']);
Route::get('uploadForm', [ExampleController::class, 'uploadForm']);
Route::post('upload',[ExampleController::Class,'upload'])->name('upload');


//Route::get('test/{id}', function($id) {

//});





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
