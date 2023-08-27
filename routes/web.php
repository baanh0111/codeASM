<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
//     return view('homepage.index');
// });

Route::get('/homepage',[HomeController::class,'index'])->name('index');
Route::get('/watch/detail/{id}', [HomeController::class, 'show'])->name('watch.detail');
Route::get('/homepage/brand/{id}', [HomeController::class, 'brand'])->name('brand.share');

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');


});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

//Brand-----------------------------------------------------------------------------------   
    Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand');
    Route::get('/brand/create', [App\Http\Controllers\BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/show/{id}', [App\Http\Controllers\BrandController::class, 'show'])->name('brand.show');
    Route::get('/brand/edit/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/edit/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/destroy/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.destroy');
//Product-----------------------------------------------------------------------------------
    Route::get('/watch', [App\Http\Controllers\WatchController::class, 'index'])->name('watch');
    Route::get('/watch/create', [App\Http\Controllers\WatchController::class, 'create'])->name('watch.create');
    Route::post('/watch/store', [App\Http\Controllers\WatchController::class, 'store'])->name('watch.store');
    Route::get('/watch/show/{id}', [App\Http\Controllers\WatchController::class, 'show'])->name('watch.show');
    Route::get('/watch/edit/{id}', [App\Http\Controllers\WatchController::class, 'edit'])->name('watch.edit');
    Route::put('/watch/edit/{id}', [App\Http\Controllers\WatchController::class, 'update'])->name('watch.update');
    Route::delete('/watch/destroy/{id}', [App\Http\Controllers\WatchController::class, 'destroy'])->name('watch.destroy');


    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

    
});

