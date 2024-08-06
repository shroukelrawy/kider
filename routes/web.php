<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kider;
use App\Http\Controllers\Dashboard;
// Route::get('/', function () {
//     $title="test";
//     return view('test',compact('title'));
// });
Route::get('/', function () {
   
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashtest');
});
Route::prefix('dashboard')->group(function(){
    Route::get('dashform',[Dashboard::class,'dashform'])->name('dashform');
    Route::get('dashtable',[Dashboard::class,'dashtable'])->name('dashtable');
    // Route::post('register',[Dashboard::class,'register'])->name('register');
    Route::get('login',[Dashboard::class,'login'])->name('login');
    });
Route::get('kider',[kider::class,'kider'])->name('home');
Route::get('about',[Kider::class,'about'])->name('about');
Route::get('class',[Kider::class,'class'])->name('class');
Route::get('pages/facility',[Kider::class,'facility'])->name('facility');
Route::get('pages/teams',[Kider::class,'teams'])->name('teams');
Route::get('pages/beteacher',[Kider::class,'beteacher'])->name('beteacher');
Route::get('pages/getappoint',[Kider::class,'getappoint'])->name('getappoint');
Route::get('pages/testemon',[Kider::class,'testemon'])->name('testemon');
Route::get('pages/error',[Kider::class,'error'])->name('error');
Route::get('contact',[Kider::class,'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
