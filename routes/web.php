<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Students Routes
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
Route::get('/students/create',[App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('students.destroy');

// Subjects Routes
Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create',[App\Http\Controllers\SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects', [App\Http\Controllers\SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{subjects}', [App\Http\Controllers\SubjectController::class, 'show'])->name('subjects.show');
Route::get('/subjects/{subjects}/edit', [App\Http\Controllers\SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/{subjects}', [App\Http\Controllers\SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{subjects}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subjects.destroy');

<<<<<<< HEAD
=======
// Group Route
Route::get('/group', [App\Http\Controllers\GroupController::class, 'index'])->name('group.index');
Route::get('/group/create',[App\Http\Controllers\GroupController::class, 'create'])->name('group.create');
Route::post('/group', [App\Http\Controllers\GroupController::class, 'store'])->name('group.store');
Route::get('/group/{group}', [App\Http\Controllers\GroupController::class, 'show'])->name('group.show');
Route::get('/group/{group}/edit', [App\Http\Controllers\GroupController::class, 'edit'])->name('group.edit');
Route::put('/group/{group}', [App\Http\Controllers\GroupController::class, 'update'])->name('group.update');
Route::delete('/group/{group}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('group.destroy');

// Hall Route
Route::get('/hall', [App\Http\Controllers\HallController::class, 'index'])->name('hall.index');
Route::get('/hall/create',[App\Http\Controllers\HallController::class, 'create'])->name('hall.create');
Route::post('/hall', [App\Http\Controllers\HallController::class, 'store'])->name('hall.store');
Route::get('/hall/{hall}', [App\Http\Controllers\HallController::class, 'show'])->name('hall.show');
Route::get('/hall/{hall}/edit', [App\Http\Controllers\HallController::class, 'edit'])->name('hall.edit');
Route::put('/hall/{hall}', [App\Http\Controllers\HallController::class, 'update'])->name('hall.update');
Route::delete('/hall/{hall}', [App\Http\Controllers\HallController::class, 'destroy'])->name('hall.destroy');

// Timetable Routes
Route::get('/timetable', [App\Http\Controllers\TimetableController::class, 'index'])->name('timetable.index');
Route::get('/timetable/create',[App\Http\Controllers\TimetableController::class, 'create'])->name('timetable.create');
Route::post('/timetable', [App\Http\Controllers\TimetableController::class, 'store'])->name('timetable.store');
Route::get('/timetable/{timetable}', [App\Http\Controllers\TimetableController::class, 'show'])->name('timetable.show');
Route::get('/timetable/{timetable}/edit', [App\Http\Controllers\TimetableController::class, 'edit'])->name('timetable.edit');
Route::put('/timetable/{timetable}', [App\Http\Controllers\TimetableController::class, 'update'])->name('timetable.update');
Route::delete('/timetable/{timetable}', [App\Http\Controllers\TimetableController::class, 'destroy'])->name('timetable.destroy');

>>>>>>> c85620f (adding new files and codes)
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
