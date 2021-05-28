<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
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
Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('home', [AuthController::class, 'home'])->name('home');
});
/*Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'name' => 'admin.'], function () {
    Route::get('/', 'AuthController@showLoginForm')->name('login');
});*/

//Route::get('importExportView', 'Corporativo\PatioLeilao\Import\ImportExcelController@importExportView');