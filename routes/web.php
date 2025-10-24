<?php

use App\Http\Controllers\BoutiqueController;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoutiqueController::class, 'index'])->name('boutique.index');

Route::get('details/{id}', [BoutiqueController::class, 'show'])->name('show');
