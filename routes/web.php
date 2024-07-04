<?php

use App\Http\Controllers\ChallengesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('challenges/')->group(function () {
    Route::name('challenges.')->group(function () {
        Route::get('{id}', [ChallengesController::class, 'challenge'])->name('index');
    });
});
