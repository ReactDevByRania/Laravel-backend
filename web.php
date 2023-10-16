<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RenduVousController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\AppointmentController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth:admin'])->group(function () {
Route::get('admin/dashboard', [AdminController::class, 'AdminDhashboard'])->name('admin.dashboard');
Route::get('secrt/dashboard', [AdminController::class, 'SecrtDhashboard'])->name('secrt.dashboard');
});

Route::middleware(['auth:client'])->group(function () {
    Route::get('client/dashboard', [ClientController::class, 'ClientDhashboard'])->name('client.dashboard');
});


Route::get('admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.index');



Route::get('admin', [AdminController::class, 'showForm'])->name('admin');
Route::post('admin/login', [AdminController::class, 'checkLogin'])->name('admin.login');


Route::get('client', [ClientController::class, 'showForm'])->name('client');;
Route::post('client/login', [ClientController::class, 'checkLogin'])->name('client.login');


Route::prefix('admin')->group(function () {
    Route::resource('/rendu_vous',RenduVousController::class);
    Route::resource('/rappel',AppointmentController::class);
    Route::resource('/devis',DevisController::class);
    Route::resource('/products', ProductController::class);
});

