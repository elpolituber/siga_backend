<?php

use App\Http\Controllers\Community\beneficiaryInstitutionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\combosController;
use App\Http\Controllers\Community\projectsController;
use App\Http\Controllers\Community\PdfController;

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
//get 
Route::get('/combo', [combosController::class, 'show']);
Route::get('/project', [projectsController::class, 'show']);
Route::get('/project/{id}', [projectsController::class, 'edit']);
Route::get('/pdfConvenio/{id}', [pdfController::class, 'pdf']);
Route::get('/pdfProject/{id}',[pdfController::class,'projectVinculacion']);
//post
Route::post('/project', [projectsController::class, 'create']);
Route::post('/prueba', [projectsController::class, 'creador']);
Route::post('/combo', [combosController::class, 'create']);
Route::post('/sbeneficiary', [beneficiaryInstitutionController::class, 'search']);

//put
Route::put('/project', [projectsController::class, 'update']);
Route::put('/prueba', [projectsController::class, 'creador']);

//delete
Route::delete('project/{id}',[projectsController::class, 'destroy']);



