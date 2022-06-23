<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::get("/products", [ProductController::class, "index"]);
});

Route::post("/login", [LoginController::class, "login"]);
Route::post("/logout", [LoginController::class, "logout"]);
Route::post("/register", [LoginController::class, "register"]);

