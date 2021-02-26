<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeachersController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => '/v1'], function()
{
    Route::get('teachers', [TeachersController::class, 'teacherList']);
    // Route::get('teachers/{query}', [TeachersController::class, 'teacherQuery']);
    Route::post("teacher-login", [TeachersController::class, 'teacherLogin']);
});