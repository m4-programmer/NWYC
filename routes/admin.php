<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VideoTagController;
use App\Http\Controllers\Admin\ManageVideosController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->withoutMiddleware('traffic');
Route::resource('/video_tags', VideoTagController::class);
Route::resource('/videos', ManageVideosController::class);

