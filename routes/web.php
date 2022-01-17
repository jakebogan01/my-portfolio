<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'projects'])->name('projects');

Route::get('/about', [AppController::class, 'about'])->name('about');

Route::get('/skills', [AppController::class, 'skills'])->name('skills');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::get('/project-{slug}', [AppController::class, 'redirect'])->where('user', '^([1-4])$');
Route::post('/project-{slug}', [AppController::class, 'show'])->name('show.project')->where('user', '^([1-4])$');
