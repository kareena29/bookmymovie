<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
use App\Http\Controllers\CastController;


Route::get('/', function () {return view('home');});



Route::get('admin/home',function (){return view('admin.home');
})->name('post');



Route::resource('admin/movie',movieController::class);

Route::resource('admin/cast',CastController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
