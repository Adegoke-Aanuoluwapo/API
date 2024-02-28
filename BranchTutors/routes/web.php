<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/register', [AuthController::class,'loadRegister']);
Route::post('/studentRegister', [AuthController::class,'studentRegister'])->name('studentRegister');
Route::get(
    '/login',
    [AuthController::class, 'loadLogin']
);
Route::Post('/loginUser',[AuthController::class, 'userLogin']
);
Route::post('/logout',[AuthController::class, 'logout']
);

Route::group(['middleware'=>['web', 'checkAdmin']],function(){
    Route::get('/admin/dashboard', [AuthController::class, 'loadAdminDashboard']);
});

Route::group(['middleware' => ['web', 'checkStudent']], function () {
    Route::get('/dashboard', [AuthController::class, 'loadDashboard']);
});