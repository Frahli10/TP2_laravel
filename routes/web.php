<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MaisonneuveEtudiantController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\langueController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DocumentController;




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

Route::get('/etudiants', [MaisonneuveEtudiantController::class, 'index'])->name('etudiants');
Route::get('/etudiants/create', [MaisonneuveEtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants/create', [MaisonneuveEtudiantController::class, 'store'])->name('etudiants.store');
Route::get('/etudiants/{id}', [MaisonneuveEtudiantController::class, 'show'])->name('etudiants.show');
Route::get('etudiants/{id}/edit', [MaisonneuveEtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('etudiants/{etud}/edit', [MaisonneuveEtudiantController::class, 'update']);
Route::delete('etudiants/{id}', [MaisonneuveEtudiantController::class, 'destroy']);


Route::get('login', [CustomAuthController::class, 'index']);
Route::get('register', [CustomAuthController::class, 'create']);
Route::post('custom-registration', [CustomAuthController::class, 'store'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');


Route::get('/lang/{locale}', [langueController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles/create', [ArticleController::class, 'store']);
Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::get('articles/{id}/delete', [ArticleController::class, 'destroy'])->name('articles.delete');
Route::put('articles/{id}/edit', [ArticleController::class, 'update']);


Route::get('/documents', [DocumentController::class, 'index']);
Route::post('/documents/create', [DocumentController::class, 'store']);
Route::get('documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit');
Route::get('documents/{id}/delete', [DocumentController::class, 'destroy'])->name('documents.delete');
Route::put('documents/{id}/edit', [DocumentController::class, 'update']);













