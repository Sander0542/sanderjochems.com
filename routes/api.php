<?php

use App\Http\Controllers\ApiController;
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

Route::get('/educations', [ApiController::class, 'educations'])->name('api.educations');
Route::get('/experiences', [ApiController::class, 'experiences'])->name('api.experiences');
Route::get('/projects', [ApiController::class, 'projects'])->name('api.projects');
