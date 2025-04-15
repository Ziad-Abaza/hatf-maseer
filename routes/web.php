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

Route::get('/', [HomController::class, 'index'])->name('hom.index');
Route::get('/blogns', [PageController::class, 'blogns'])->name('blogns');
Route::get('/blogns/{blogn}/{title?}', [PageController::class, 'show'])->name('blogns.show');


Route::middleware('auth')->group(function () {
  Route::post('logout', function () {
    Auth::guard('web')->logout();
    return redirect('/');
  })->name('logout');

  require __DIR__ . '/dash.php';
});

require __DIR__ . '/auth.php';
