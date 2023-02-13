<?php

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
    return view('welcome');
});

use App\Http\Controllers\Admin\FacilityController;
Route::controller(FacilityController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('facility/create', 'add')->name('facility.add');
    Route::post('facility/create', 'create')->name('facility.create');
    Route::get('facility', 'index')->name('facility.index');
    Route::get('facility/edit', 'edit')->name('facility.edit');
    Route::post('facility/edit', 'update')->name('facility.update');
    Route::get('facility/delete', 'delete')->name('facility.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\FacilityController as PublicFacilityController;
Route::get('/', [PublicFacilityController::class, 'index'])->name('facility.index');
