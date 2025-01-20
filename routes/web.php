<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminSchoolController;
use App\Http\Controllers\AdminClassroomController;
use App\Http\Controllers\UserClassroomController;
use App\Http\Controllers\UserSchoolController;
use App\Http\Controllers\UserReservationController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminReservationController;
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

## rutas para el usuario
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])
    ->name('user.dashboard')
    ->middleware(['auth', 'verified', 'role:user']);


Route::get('/user/schools', [UserSchoolController::class, 'index'])->middleware(['auth', 'verified', 'role:user'])->name('schools.index');
Route::get('/user/classrooms/{school}', [UserClassroomController::class, 'show'])->middleware(['auth', 'verified', 'role:user'])->name('classrooms.show');
Route::post('/user/reservations', [UserReservationController::class, 'store'])->middleware(['auth', 'verified', 'role:user'])->name('reservations.create');




##rutas para el administrador

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'verified', 'role:admin']);

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/schools/create', [AdminSchoolController ::class, 'create'])->name('schools.create');
    Route::post('/schools', [AdminSchoolController ::class, 'store'])->name('schools.store');
    Route::get('/classrooms/create', [AdminClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('/classrooms', [AdminClassroomController::class, 'store'])->name('classrooms.store');
    Route::put('/reservations/{reservation}', [AdminReservationController::class, 'update'])->name('reservations.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
