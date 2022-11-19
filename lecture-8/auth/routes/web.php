<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::get('/login', [AuthController::class, "loginPage"])->name("login");
Route::post("/login", [AuthController::class, "login"]);

Route::get('/register', [AuthController::class, "registerPage"])->name("register");
Route::post("/register", [AuthController::class, "register"]);


// Protected Route
Route::middleware("auth")->get('/logout', [AuthController::class, "logout"])->name("logout");
// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get("/user", [UserController::class, "index"])->name("user.index");
}); 

