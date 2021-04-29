<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\StoreManagementController;
use App\Http\Controllers\SaleRecordsController;


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

Route::get('/', [CalculationController::class, 'calculation']);

Route::prefix('/store-management')->group(function () {
   
   Route::name('sm.')->group(function () {
      
      //Stationary Management Route
      Route::prefix('/stationary')->group(function () {
         
         Route::name('st.')->group(function () {
            Route::get('/', [StoreManagementController::class, 'stationary'])->name('home');
            Route::post('/insert', [StoreManagementController::class, 'InsertStationary'])->name('toInsert');
            Route::post('/edit', [StoreManagementController::class, 'edit_stationary'])->name('toEdit');
            Route::get('/delete/{id}', [StoreManagementController::class, 'del_stationary'])->name('toDel');

            Route::get('/edit/{id}', [StoreManagementController::class, 'stationary_edit'])->name('edit');
            // Route::get('/edit', [StoreManagementController::class, 'stationary_edit'])->name('ToEdit');

         });

      });

      //Phone Bill Management Route
      Route::prefix('/phone-bills')->group(function () {
         
         Route::name('pb.')->group(function () {
            Route::get('/', [StoreManagementController::class, 'phone_bills'])->name('home');
            Route::get('/edit/{id}',[StoreManagementController::class, 'phone_bills_edit'])->name('edit');
            Route::post('/insert', [StoreManagementController::class, 'insertPhBill'])->name('toInsert');
            Route::post('/edit', [StoreManagementController::class, 'edit_phone_bills'])->name('toEdit');
            Route::get('/delete/{id}', [StoreManagementController::class, 'del_phoneBill'])->name('toDel');

         });

      });

  });

});
// Route::get('/store_management/stationary', [StoreManagementController::class, 'stationary']);
// Route::get('/store_management/stationary/phoneBill', [StoreManagementController::class, 'phone_bills'])->name('ssi');



