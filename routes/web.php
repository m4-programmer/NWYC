<?php

use App\Http\Controllers\JoinLiveController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SermonsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\RegisterWebsiteTraffic;
use Illuminate\Support\Facades\Route;


Route::middleware(RegisterWebsiteTraffic::class)->group(function (){
    Route::get('/', WelcomeController::class);

    Route::view('/about','about')->name("about");

    Route::resource('/join-us', JoinUsController::class)->only("index","store");
    Route::get('/sermons', SermonsController::class)->name("sermons");
    Route::get('/live', JoinLiveController::class)->name("live");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes
Route::prefix('admin')->middleware("auth")->name('admin.')->group(base_path('routes/admin.php'));
