<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout');
});
// Route::get('/edit/{"id"}', [StudentController::class, 'edit']);
Route::resource('/student', StudentController::class);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher/create', [TeacherController::class, 'create']);
Route::post('/teacher/create', [TeacherController::class, 'store']);
Route::get("teacher/{id}" , [TeacherController::class, 'show']);
Route::get("teacher/{id}/edit", [TeacherController::class, 'edit']);
Route::patch("teacher/{id}", [TeacherController::class, 'update']);
Route::delete("teacher/{id}", [TeacherController::class, 'destroy']);

Route::get('/course', [CourseController::class, 'index']);
Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course/create', [CourseController::class, 'store']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::get('/course/{id}/edit', [CourseController::class, 'edit']);
Route::PATCH('/course/{id}', [CourseController::class, 'update']);
Route::DELETE('/course/{id}', [CourseController::class, 'destroy']);
// Route::get('/create', [StudentController::class, 'create']);
// Route::post('create', [StudentController::class, 'store']);
// Route::get("/show_student/{{'id'}}", [StudentController::class, 'display']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
