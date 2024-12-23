<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('tag');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'index'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
});
Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'show'])->name('login.home');
    Route::delete('users/{id}', [UserController::class, 'destroy']);
    Route::delete('/logout', [UserController::class, 'destroy']);

    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs/create', [JobController::class, 'store']);

    Route::get('/employers/create', [EmployerController::class, 'create'])->name('employers.create');
    Route::post('/employers/create', [EmployerController::class, 'store']);
    Route::get('/employers/{employer:identifier}', [EmployerController::class, 'show'])->name('employers.home');
    Route::get('/employers/{employer:identifier}/edit', [EmployerController::class, 'edit'])->name('employers.edit');
    Route::patch('/employers/{employer:identifier}/edit', [EmployerController::class, 'update']);
    Route::delete('/employers/{employer:identifier}/edit', [EmployerController::class, 'destroy']);

});