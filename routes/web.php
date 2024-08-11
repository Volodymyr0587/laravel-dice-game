<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiceGameController;

// Dice Game
Route::get('/', [DiceGameController::class, 'index'])->name('dice-game');
Route::post('/roll', [DiceGameController::class, 'roll'])->name('roll');
