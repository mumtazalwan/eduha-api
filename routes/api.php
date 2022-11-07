<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Learning_Path_Controller;
use App\Http\Controllers\Course_foundation_Controller;
use App\Http\Controllers\foundation_material_controller;
use App\Http\Controllers\materials_controller;
use App\Http\Controllers\Daily_chalenge_controller;

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\Selection_controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('learning-path', [Learning_Path_Controller::class, 'index']);
Route::get('learning-path/foundation', [Course_foundation_Controller::class, 'Cofoundation']);
Route::get('learning-path/foundation/material', [foundation_material_controller::class, 'FoMaterial']);
Route::get('learning-path/foundation/material/detail', [materials_controller::class, 'Materials']);

Route::get('exercise', [ExerciseController::class, 'index']);
Route::get('selection', [Selection_controller::class, 'index']);

Route::get('today-chalange', [Daily_chalenge_controller::class, 'DailyChalenge']);
