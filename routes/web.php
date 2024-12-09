<?php

use App\Http\Controllers\ConcessionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/addconcession', [ConcessionController::class, 'store'])->name('concessions.store');
Route::get('/view-concession', [ConcessionController::class, 'index'])->name('conession_view');
Route::get('/add-concessionview',[ConcessionController::class,'viewAddConcessionPage'])->name('conession_addview');