<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan ini untuk CRUD employees
Route::resource('employees', EmployeeController::class);
