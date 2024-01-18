<?php

use App\Http\Controllers\MensagemController;
use App\Http\Controllers\UserController;
use App\Models\Mensagem;
use App\Models\User;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('mensagens', [MensagemController::class, 'index']);
    Route::get('mensagens/{id}', [MensagemController::class, 'show']);
    Route::post('mensagens', [MensagemController::class, 'store']);
    Route::put('mensagens/{id}', [MensagemController::class, 'update']);
    Route::delete('mensagens/{id}', [MensagemController::class, 'destroy']);


    Route::get('users', [UserController::class, 'index']);
    Route::get('users/{id}', [UserController::class, 'show']);
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'destroy']);
