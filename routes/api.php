<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Owner\MobilController;
use App\Http\Controllers\API\Owner\OwnerDetailController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

Route::get('mobil',[MobilController::class, 'index']);
Route::post('mobil/add',[MobilController::class, 'add']);

Route::get('userDetail',[UserDetailController::class, 'index']);
Route::post('userDetail/add',[UserDetailController::class, 'add']);

Route::group(['prefix' => 'owner'], function () {
    // Route::group(['middleware' => 'auth:api'], function () {
        Route::get('OwnerDetail',[OwnerDetailController::class, 'index']);
        Route::post('OwnerDetail/add',[OwnerDetailController::class, 'add']);
        Route::put ('OwnerDetail/update/{id}', [OwnerDetailController::class, 'update']);
        Route::post('OwnerDetail/delete', [OwnerDetailController::class, 'delete']);
    });
// });