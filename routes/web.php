<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('register');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get("/register", "register")->name("register");
    Route::post("/store", "store")->name("store");
    Route::get("/login", "login")->name("login");
    Route::post("/authenticate", "authenticate")->name("authenticate");
    Route::get("/dashboard", "dashboard")->name("dashboard");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
