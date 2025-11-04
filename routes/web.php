<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveRquestController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('employees', EmployeeController::class);
Route::resource('leave_requests', LeaveRquestController::class);