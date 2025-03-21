<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route to display the upload form (GET request)
Route::get('/upload', function() {
    return view('upload'); 
});

// Route to handle form submission (POST request)
Route::post('/upload', [HomeController::class, 'upload']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
// Route to show update form
Route::get('/update_view/{id}', [HomeController::class, 'update_view']);

// Route to update an employee's details
Route::post('/update/{id}', [HomeController::class, 'update']);




?>
