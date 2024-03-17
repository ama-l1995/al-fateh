<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::match(['get', 'post'], '/login', [AdminController::class, 'showLoginAdmin'])->name('showLoginAdmin');
        Route::group(['prefix' => 'admins'], function () {
            Route::match(['get', 'post'], '/home', [AdminController::class, 'login'])->name('admin_login');
            Route::get('/', [AdminController::class, 'showHomeDashboard'])->name('home');
            Route::get('/all_admins', [AdminController::class, 'all_admins'])->name('all_admins');
            Route::get('/create_admin', [AdminController::class, 'create_admin'])->name('create_admin');
            Route::post('/store_admin', [AdminController::class, 'store_admin'])->name('store_admin');
            Route::delete('/delete_admin/{id}', [AdminController::class, 'delete_admin'])->name('delete_admin');
            Route::get('/edit_admin/{id}', [AdminController::class, 'edit_admin'])->name('edit_admin');
            Route::post('/update_admin/{id}', [AdminController::class, 'update_admin'])->name('update_admin');
        });
    });
});
