<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



// Route::get('/', function () {
//     return view('welcome');
    
// });

Route::get('/', [PagesController::class, 'index']);

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/users/{id}', function ($id) {
    return 'This is a user ' .$id;
});
