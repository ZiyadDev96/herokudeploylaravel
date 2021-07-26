<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/add-student', [StudentController::class, 'store']);
Route::put('/edit-student/{id}' , [StudentController::class, 'update']);
Route::get('/edit-student/{id}' , [StudentController::class, 'edit']);

Route::delete('/delete-student/{id}' , [StudentController::class, 'destroy']);
Route::get('/students' , [StudentController::class, 'index']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
