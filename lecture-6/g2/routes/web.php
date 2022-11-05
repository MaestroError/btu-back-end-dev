<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get("posts", [PostController::class, "list"])->name("posts.list");
Route::get("post/{id}", [PostController::class, "post"])->name("posts.post");
Route::get("posts/edit/{post?}", [PostController::class, "createOrUpdated"])->name("posts.edit");
Route::get("posts/delete/{post}", [PostController::class, "delete"])->name("posts.delete");