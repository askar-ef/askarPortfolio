<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SendEmailController;

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
//     return view("register");
// });

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get("/", "register")->name("register");
    Route::get("/register", "register")->name("register");
    Route::post("/store", "store")->name("store");
    Route::get("/login", "login")->name("login");
    Route::post("/authenticate", "authenticate")->name("authenticate");
    Route::get("/dashboard", "dashboard")->name("dashboard");
    Route::get("/logout", "logout")->name("logout");
});


Route::get('/user', [LoginRegisterController::class, 'showUser']);
Route::post('/delete-photo', [LoginRegisterController::class, 'deletePhoto'])->name('delete-photo');
Route::get('/update-photo/{id}', [LoginRegisterController::class, 'updatePhoto'])->name('update-photo');
Route::get('/edit-photo/{id}', [LoginRegisterController::class, 'editPhoto'])->name('edit-photo');

// Route::get('/pindah', [LoginRegisterController::class, 'pindah'])->name('pindah');


Route::controller(SendEmailController::class)->group(function () {
    Route::get('/send-email', 'index')->name('kirim-email');
    Route::post('/post-email', 'store')->name('post-email');
    Route::get('/send-verif', 'sendVerif')->name('kirim-verif');
    Route::put('/update-photo/{id}', 'updatePhoto')->name('update-photo');
    Route::get('/edit-photo/{id}', 'editPhoto')->name('edit-photo');
    Route::delete('/delete-photo/{id}', 'deletePhoto')->name('delete-photo');
});

Route::resource('gallery', GalleryController::class);

Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
Route::get('/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
