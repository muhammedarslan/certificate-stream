<?php

use App\Http\Controllers\PdfController;
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

Route::post("/certificate/stream", [PdfController::class, 'createPDF'])->name("pdf");
Route::get("/certificate/create", [PdfController::class, 'home'])->name("home");

Route::get('/', function () {
    return redirect()->route("home");
});