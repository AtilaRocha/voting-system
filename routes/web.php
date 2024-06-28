<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'showVotingStatistics'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/options', [OptionController::class, 'index'])->name('options.index');
Route::get('/options/update', [OptionController::class, 'showUpdateForm'])->name('options.update.form');
Route::post('/options/update', [OptionController::class, 'updateOptions'])->name('options.update');
Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');

require __DIR__.'/auth.php';

