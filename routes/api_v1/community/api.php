<?php

use App\Http\Controllers\Community\beneficiaryInstitutionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\combosController;
use App\Http\Controllers\Community\objetiveController;
use App\Http\Controllers\Community\projectsController;
use App\Http\Controllers\Community\stakeHolderController;
use App\Http\Controllers\Community\PdfController;
use App\Http\Controllers\Community\authorityController;
use App\Http\Controllers\Community\participantController;

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
	// filtros de combos y autoload
Route::get('/combo', [combosController::class, 'show']);
Route::get('/location', [combosController::class, 'index']);
Route::get('/user', [combosController::class, 'user']);
	// vista de tabla
Route::get('/project', [projectsController::class, 'show']);
Route::get('/project/{id}', [projectsController::class, 'edit']);
	// pdf
Route::get('/pdfConvenio/{id}', [pdfController::class, 'pdf']);
Route::get('/pdfProject/{id}',[pdfController::class,'projectVinculacion']);
	// listas
Route::get('/authority',[authorityController::class,'show']);

//post
Route::post('/project', [projectsController::class, 'create']);
Route::post('/teacher', [participantController::class, 'teacherCreate']);
Route::post('/student', [participantController::class, 'studentCreate']);

Route::post('/combo', [combosController::class, 'create']);
Route::post('/search', [beneficiaryInstitutionController::class, 'search']);
Route::post('/authority',[authorityController::class,'create']);
Route::post('/file/{id}',[projectsController::class, 'file']);
Route::post('/schedules/{id}',[projectsController::class, 'schedules']);
Route::post('/logo/{id}', [beneficiaryInstitutionController::class, 'logo']);

//put
Route::put('/project', [projectsController::class, 'update']);
Route::put('/prueba', [projectsController::class, 'creador']);
Route::put('/authority',[authorityController::class,'update']);
Route::put('/teacher', [participantController::class, 'teacherUpdate']);
Route::put('/student', [participantController::class, 'studentUpdate']);
Route::put('/status/{id}', [projectsController::class, 'status']);
 
//delete
Route::delete('project/{id}',[projectsController::class, 'destroy']);
Route::delete('holder/{id}',[stakeHolderController::class, 'destroy']);
Route::delete('objetive/{id}',[objetiveController::class, 'destroy']);
Route::delete('authority/{id}',[authorityController::class, 'destroy']);
Route::delete('participant/{id}',[participantController::class, 'destroy']);



