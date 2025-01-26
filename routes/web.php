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

Route::get('/user/reservations', [UserReservationController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:user'])
    ->name('reservations.index');

Route::get('/user/reservations/{reservation}/edit', [UserReservationController::class, 'edit'])
    ->middleware(['auth', 'verified', 'role:user'])
    ->name('reservations.edit');

Route::put('/user/reservations/{reservation}', [UserReservationController::class, 'update'])
    ->middleware(['auth', 'verified', 'role:user'])
    ->name('reservations.update');



##rutas para el administrador

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'verified', 'role:admin']);

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/schools/create', [AdminSchoolController ::class, 'create'])->name('schools.create');
    Route::post('/schools', [AdminSchoolController ::class, 'store'])->name('schools.store');
    Route::get('/schools', [AdminSchoolController::class, 'index'])->name('schools.index');
    Route::get('/schools/{school}/edit', [AdminSchoolController::class, 'edit'])->name('schools.edit');
    Route::put('/schools/{school}', [AdminSchoolController::class, 'update'])->name('schools.update');
    Route::delete('/schools/{school}', [AdminSchoolController::class, 'destroy'])->name('schools.destroy');
    Route::get('/classrooms/create', [AdminClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('/classrooms', [AdminClassroomController::class, 'store'])->name('classrooms.store');
    Route::put('/reservations/{reservation}', [AdminReservationController::class, 'update'])->name('reservations.update');
    Route::get('/classrooms', [AdminClassroomController::class, 'index'])->name('classrooms.index'); // Listar aulas
    Route::get('/classrooms/{classroom}/edit', [AdminClassroomController::class, 'edit'])->name('classrooms.edit'); // Editar aula
    Route::put('/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('classrooms.update'); // Actualizar aula
    Route::delete('/classrooms/{classroom}', [AdminClassroomController::class, 'destroy'])->name('classrooms.destroy'); // Eliminar aula
    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});




require __DIR__.'/auth.php';
