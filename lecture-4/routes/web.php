<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    // Return template with 'view' helper function and pass $isActive variable
    return view('pages.home', ["isActive" => false]);
})->name("pages.home");

// Pages from PagesController (app/Http/Controllers/PagesController.php)
Route::get("about", [PagesController::class, "about"]);
Route::post("test", [PagesController::class, "postTest"])->name("formtest");
