<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\BusinessPlaceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\EquipmentController;
use App\Http\Controllers\Admin\OrderRequestController;
use App\Http\Controllers\Admin\SPController;
use App\Http\Controllers\Admin\TMController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'admin', "middleware" => "auth"], function () {
    Route::prefix('user')->group(function () {
        Route::get("/customer", [CustomerController::class, 'getCustomerBlade'])->name("get-user-customer");
        Route::get("/customer/add", [CustomerController::class, 'getAddCustomerBlade'])->name("get-add-customer");
        Route::post("/customer/add", [CustomerController::class, 'addCustomer']);
        Route::get("/customer/{id}/delete", [CustomerController::class, 'deleteCustomer'])->name('delete-customer');
        Route::get('customer/{id}/update', [CustomerController::class, 'showCustomer'])->name('update-customer');
        Route::post('customer/{id}/update', [CustomerController::class, 'updateCustomer']);
    });
    Route::prefix('user')->group(function () {
        Route::resource('driver', DriverController::class);
        Route::resource('equipment', EquipmentController::class);
        Route::resource('organization', SPController::class);
        Route::resource('transport-manager', TMController::class);
        Route::resource('business-place', BusinessPlaceController::class);
        Route::resource('order-request', OrderRequestController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
