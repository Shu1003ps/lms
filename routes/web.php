<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [LearningController::class, 'home']);
Route::get('/records/{record}', [LearningController::class , 'show']);
Route::get('/home/goal_setting', [LearningController::class, 'goal_setting']);
Route::get('/home/goals/{goal}', [LearningController::class, 'show']);
Route::get('/stopwatch', [LearningController::class, 'stopwatch']);