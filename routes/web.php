<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('welcome');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'formLogin')->name('login');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
    Route::post('/login', 'authenticate')->name('authenticate');
});

// Route::controller(UserController::class)->group(function(){
//     Route::prefix('/users')->group(function(){
//         Route::name('users.')->group(function(){
//             Route::middleware('auth')->group(function() {
//                 Route::get('', 'index')->name('index');
//                 Route::get('/{id}/edit', 'edit')->name('edit');
//                 Route::get('/create', 'create')->name('create');
//                 Route::get('/{id}',  'show')->name('show');
//                 Route::post('', 'store')->name('store');
//                 Route::put('/{id}', 'update')->name('update');
//                 Route::delete('/{id}', 'destroy')->name('destroy');
//             });
//         });
//     });
// });

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        echo "Você está na dashboard";
    })->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
});

