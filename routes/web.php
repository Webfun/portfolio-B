<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\PageController;

use App\Http\Controllers\admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('frontend.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/project', [PageController::class, 'project'])->name('project');
    Route::get('/services', [PageController::class, 'services'])->name('services');
});



Route::redirect("/admin", "/login");

Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function () {

        Route::group(['middleware' => 'admin.auth'], function () {
            // Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


        });
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
