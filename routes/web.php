<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::middleware("auth")->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name("home");
    Route::get('/counts', [HomeController::class, 'counts'])->name("counts");
    Route::get("/visits", [AppController::class, "allVisits"])->name("visits");
    Route::get("/configs", [ConfigController::class, "showConfigs"])->name("configs");
    Route::get("/users_manage", [UserController::class, "showAllUsers"])->name("users_manage");
    Route::post("/user_create", [UserController::class, "createUser"])->name("user_create");
    Route::post("/visit_create", [AppController::class, "saveVisit"])->name(name: "visit.create");
    Route::get("/stories", [HomeController::class, "getStories"])->name(name: "stories");
});

