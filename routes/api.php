<?php

use App\Http\Controllers\Api\AuthTokenController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ProposalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user()->load('role');
});

Route::post('/auth/token', [AuthTokenController::class, 'store']);

Route::middleware('auth:sanctum')->get('/dashboard', [DashboardController::class, 'index']);

Route::middleware('auth:sanctum')->get('/proposals', [ProposalController::class, 'index']);

Route::middleware(['auth:sanctum', 'role:dosen'])->post('/proposals', [ProposalController::class, 'store']);

Route::middleware(['auth:sanctum', 'role:kepala_lppm'])
    ->patch('/proposals/{proposal}/status', [ProposalController::class, 'updateStatus']);
