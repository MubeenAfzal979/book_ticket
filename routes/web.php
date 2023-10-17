<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

    $seats = \App\Models\Ticket::where('confirm_ticket',1)->count();
    return view('welcome')->with('seats',200-$seats);
})->name('welcome');

Route::get('sample', function () {
    return view('sample');
})->name('sample');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/confirm-purchase', [HomeController::class, 'confirmPurchase'])->name('confirm.purchase');
Route::get('/check', [HomeController::class, 'checkTicket']);
Route::get('/email_ticket', [HomeController::class, 'emailTicket']);

