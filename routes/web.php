<?php

use App\Http\Controllers\AusWine\AusWineController;
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

Route::get('/', function () {
    return view('index');
});
Route::resources([
 'ausWine' => AusWineController::class
]);
Route::get('ausWine_destroy/{destroy}',[AusWineController::class, 'destroy'])->name('ausWine_destroy');
