<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleSiteController;

Route::get('/', [SimpleSiteController::class, 'showHome']);
Route::get('/service', [SimpleSiteController::class, 'showService']);
Route::get('/about', [SimpleSiteController::class, 'showAbout']);
Route::get('/portfolio', [SimpleSiteController::class, 'showPortfolio']);
