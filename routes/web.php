<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// When visiting the home page, call TaskController@index to display the task list
Route::get('/', [TaskController::class, 'index']);

// Handle POST requests for adding new tasks
Route::post('/tasks', [TaskController::class, 'store']);
