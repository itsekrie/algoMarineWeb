<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchievementController;
Route::get('/station', function () {
    return view('station');
});

Route::get('/', [PageController::class, 'Homepage'])->name('home');

Route::get('/Teams', [TeamController::class,'index'])->name('Teams');

Route::get('/Teams/{slug}', [TeamController::class,'show'])->name('Teams.show');

Route::get('/Profile', [PageController::class, 'Profile']) -> name('Profile');

Route::get('/Articles', [ArticleController::class,'index'])->name('Articles');

Route::get('/Articles/{slug}', [ArticleController::class,'show'])->name('Articles.show');

Route::get('/Achievements',[AchievementController::class,'index'])->name('Achievement.show');

Route::get('/Achievements/{id}',[AchievementController::class,'show']);