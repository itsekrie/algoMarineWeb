<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Teams', [TeamController::class,'index'])->name('Teams');

Route::get('/Teams/{slug}', [TeamController::class,'show'])->name('Teams.show');



