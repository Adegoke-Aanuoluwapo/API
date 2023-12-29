<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'homepage']
);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/post_page', [AdminController::class, 'index']);

Route::get('home', [HomeController::class, 'index' ] )->middleware('auth')->name('home');
Route::get('homepage', function(){
    return view('home.homepage');
});
Route::get('/show_post', [AdminController::class, 'showAllPost']);
Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::post('/add_post', [AdminController::class, 'create']);
Route::get('/deletepost/{id}', [AdminController::class, 'destroy']);
Route::get('/edit_page/{id}', [AdminController::class, 'edit']);
Route::post('/update_page/{id}', [AdminController::class, 'update']);
Route::get('/blogpost/{id}', [HomeController::class, 'show']);
Route::get('/create_post', [HomeController::class, 'createpost'])->middleware('auth');
Route::post('/createpost', [HomeController::class, 'create'])->middleware('auth');
