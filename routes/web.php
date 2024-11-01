<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Homepage'])->name('home');

Route::get('/Teams', [TeamController::class,'index'])->name('Teams');

Route::get('/Teams/{slug}', [TeamController::class,'show'])->name('Teams.show');

Route::get('/Profile', [PageController::class, 'Profile']) -> name('Profile');


