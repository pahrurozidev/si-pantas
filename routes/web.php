<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInfoController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Informasi;
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

Route::get("/", fn () => view("main.home", [
    "informasi" => Informasi::latest()->get()
]));


Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/informasi/{informasi:slug}", [InformasiController::class, "show"]);

Route::get("/dashboard", [DashboardController::class, 'index'])->middleware("auth");

Route::get("/dashboard/warga/laporan", [DashboardController::class, 'create'])->middleware("warga");
Route::post("/dashboard/warga/laporan", [DashboardController::class, 'store'])->middleware("warga");

Route::get("/dashboard/admin/laporan", [DashboardController::class, 'show'])->middleware("admin");
Route::get("/dashboard/admin/laporan/{laporan:slug}", [DashboardController::class, 'detail'])->middleware("admin");
Route::delete("/dashboard/admin/laporan/{laporan:slug}", [DashboardController::class, 'destroy'])->middleware("admin");

Route::resource("/dashboard/informasi", DashboardInfoController::class)->middleware("admin");

Route::get("/dashboard/profile", [ProfileController::class, 'index'])->middleware("auth");

Route::get("/dashboard/history", [HistoryController::class, 'index'])->middleware("auth");
