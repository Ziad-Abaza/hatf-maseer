<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomController;
use App\Http\Controllers\Frontend\PageController;

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

Route::get('/', [HomController::class, 'index'])->name('hom.index')->middleware('store.referral');
Route::get('/blogns', [PageController::class, 'blogns'])->name('blogns');
Route::get('/blogns/{blog}/{title?}', [PageController::class, 'show'])->name('blogns.show');

Route::middleware('auth')->group(function () {
  Route::post('logout', function () {
    Auth::guard('web')->logout();
    return redirect('/');
  })->name('logout');

// Handle all missing routes and redirect to the homepage
Route::fallback(function () {
    return redirect('/');
});

    require __DIR__ . '/dash.php';
});

require __DIR__ . '/auth.php';

