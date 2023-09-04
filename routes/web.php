<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\seleksiadmController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\userController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/applicant');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/applicant', [crudController::class, 'applicant'])->middleware('userAuth:applicant');
    Route::get('/logout', [SesiController::class, 'logout']);
});
Route::resource('/user', userController::class)->middleware('userAuth:applicant');
Route::resource('/admin', crudController::class)->middleware('userAuth:admin');
Route::resource('/jadwal', seleksiadmController::class)->middleware('userAuth:admin');
// Route::resource('/admins', seleksiadmController::class)->middleware('userAuth:admin');
// Route::get('/biodata/{id}', 'BiodataController@show');

Route::put('/jadwal/update', [seleksiadmController::class, 'update'])->name('update-jadwal');
// Route::get('/detail', detailController::class)->middleware('userAuth');

//Export
Route::get('generatepdf', [crudController::class, 'generatepdf'])->name('user.pdf');
Route::get('user-export', [crudController::class, 'export'])->name('user.export');
