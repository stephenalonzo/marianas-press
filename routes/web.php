<?php

use App\Models\Report;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [ReportController::class, 'index'])->name('Home');

Route::get('/news/sports', [ReportController::class, 'allSports'])->name('Sports');
Route::get('/news/{report:slug}', [ReportController::class, 'show']);
Route::get('/news', [ReportController::class, 'allReports'])->name('News');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/news/create', [DashboardController::class, 'create']);

Route::get('/dashboard/search', [DashboardController::class, 'index']);
Route::post('/dashboard/news', [ReportController::class, 'create']);

Route::get('/meet-the-team', [UserController::class, 'index'])->name('About Us');

// Route::put('/dashboard/news/update/{report}', [ReportController::class, 'update']);
Route::get('/dashboard/news/edit/{report}', [DashboardController::class, 'edit']);
Route::put('/dashboard/news/edit/{report}', [ReportController::class, 'update']);

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
