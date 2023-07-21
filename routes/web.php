<?php

use App\Http\Controllers\AjaxcrudController;
use App\Http\Controllers\OnerelationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index',[OnerelationController::class,'index'])->name('company.index');


