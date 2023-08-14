<?php

use App\Http\Controllers\AjaxcrudController;
use App\Http\Controllers\OnerelationController;
use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/index',[AjaxcrudController::class,'index'])->name('ajaxcrud.index');
// Route::get('/ajaxcrud',[AjaxcrudController::class,'ajax'])->name('ajaxcrud.ajaxcrud');
// Route::post('/store',[AjaxcrudController::class,'store'])->name('ajaxcrud.store');



Route::get('/pageindex',[PaginationController::class,'index'])->name('page.index');
Route::get('/pagecreate',[PaginationController::class,'create'])->name('page.create');
Route::post('/pagestore',[PaginationController::class,'store'])->name('page.store');



Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    Mail::to('krishahirapara666@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});