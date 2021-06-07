<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\StoreManagementController;
use App\Http\Controllers\phoneBillManagement;
use App\Http\Controllers\stationaryManagement;
use App\Http\Controllers\PrintManagementController;



use App\Http\Controllers\saleRecordsManagement;


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
Route::post('/autocomplete', [saleRecordsManagement::class, 'ajaxAutocomplete']);

Route::prefix('/sale-records')->group(function () {

   Route::name('sa.')->group(function () {
      Route::get('/', [saleRecordsManagement::class, 'storeSaleRecords'])->name('home');
      
      Route::prefix('/print')->group(function () {
         Route::name('print.')->group(function () {
            Route::post('/insert', [saleRecordsManagement::class, 'insert_print'])->name('toInsert');
            Route::get('/edit/{id}', [saleRecordsManagement::class, 'edit_print'])->name('toEdit');
            Route::post('/update', [saleRecordsManagement::class, 'update_print'])->name('toUpdate');
            Route::get('/delete/{id}', [saleRecordsManagement::class, 'delete_print'])->name('toDelete');
            
         });
      
      });
   
      
      Route::prefix('/stationary')->group(function () {
         Route::name('st.')->group(function () {
            Route::post('/insert', [saleRecordsManagement::class, 'insert_st'])->name('toInsert');
            Route::get('/edit/{id}', [saleRecordsManagement::class, 'edit_st'])->name('toEdit');
            Route::post('/update', [saleRecordsManagement::class, 'update_st'])->name('toUpdate');
            Route::get('/delete/{id}', [saleRecordsManagement::class, 'delete_st'])->name('toDelete');

         });
               
      });

      Route::prefix('/phone-bill')->group(function () {
         Route::name('ph.')->group(function () {
            Route::post('/insert', [saleRecordsManagement::class, 'insert_pb'])->name('toInsert');
            Route::get('/edit/{id}', [saleRecordsManagement::class, 'edit_pb'])->name('toEdit');
            Route::post('/update', [saleRecordsManagement::class, 'update_pb'])->name('toUpdate');
            Route::get('/delete/{id}', [saleRecordsManagement::class, 'delete_pb'])->name('toDelete');
         });
      });

      Route::prefix('/computer')->group(function () {
         Route::name('com.')->group(function () {
            Route::post('/insert', [saleRecordsManagement::class, 'insert_com'])->name('toInsert');
            Route::get('/edit/{id}', [saleRecordsManagement::class, 'edit_com'])->name('toEdit');
            Route::post('/update', [saleRecordsManagement::class, 'update_com'])->name('toUpdate');
            Route::get('/delete/{id}', [saleRecordsManagement::class, 'delete_com'])->name('toDelete');
         });        
      });


   });
      
});
Route::prefix('/store-management')->group(function () {
   
   Route::name('sm.')->group(function () {
      
      //Stationary Management Route
      Route::prefix('/stationary')->group(function () {
         
         Route::name('st.')->group(function () {
            Route::get('/', [stationaryManagement::class, 'stationary'])->name('home');
            Route::post('/insert', [stationaryManagement::class, 'InsertStationary'])->name('toInsert');
            Route::post('/edit', [stationaryManagement::class, 'edit_stationary'])->name('toEdit');
            Route::get('/delete/{id}', [stationaryManagement::class, 'del_stationary'])->name('toDel');

            Route::get('/edit/{id}', [stationaryManagement::class, 'stationary_edit'])->name('edit');
            // Route::get('/edit', [StoreManagementController::class, 'stationary_edit'])->name('ToEdit');

         });

      });

      //Phone Bill Management Route
      Route::prefix('/phone-bills')->group(function () {
         
         Route::name('pb.')->group(function () {
            Route::get('/', [phoneBillManagement::class, 'phone_bills'])->name('home');
            Route::get('/edit/{id}',[phoneBillManagement::class, 'phone_bills_edit'])->name('edit');
            Route::post('/insert', [phoneBillManagement::class, 'insertPhBill'])->name('toInsert');
            Route::post('/edit', [phoneBillManagement::class, 'edit_phone_bills'])->name('toEdit');
            Route::get('/delete/{id}', [phoneBillManagement::class, 'del_phoneBill'])->name('toDel');

         });

      });

      //Print Management Route
      Route::prefix('/print')->group(function () {
   
         Route::name('print.')->group(function () {
            Route::get('/', [PrintManagementController::class, 'print'])->name('home');
            Route::get('/edit/{id}',[phoneBillManagement::class, 'phone_bills_edit'])->name('edit');
            Route::post('/insert', [phoneBillManagement::class, 'insertPhBill'])->name('toInsert');
            Route::post('/edit', [phoneBillManagement::class, 'edit_phone_bills'])->name('toEdit');
            Route::get('/delete/{id}', [phoneBillManagement::class, 'del_phoneBill'])->name('toDel');

         });

      });

  });

});
// Route::get('/store_management/stationary', [StoreManagementController::class, 'stationary']);
// Route::get('/store_management/stationary/phoneBill', [StoreManagementController::class, 'phone_bills'])->name('ssi');



