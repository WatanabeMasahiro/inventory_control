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

Route::get('inventory_control', 'stockController@homeGet');
Route::post('inventory_control', 'stockController@homePost');

<<<<<<< Updated upstream
Route::get('inventory_control/data_register', 'stockController@registerGet');
Route::post('inventory_control/data_register', 'stockController@registerPost');

Route::get('inventory_control/update_delete', 'stockController@deleteGet');
Route::post('inventory_control/update_delete', 'stockController@deletePost');
=======
// Route::post('inventory_control', 'stockController@homePost');


Route::get('inventory_control/data_register', 'StockModelController@registerGet')->middleware('auth');

Route::post('inventory_control/data_register', 'StockModelController@registerPost');


Route::get('inventory_control/update_delete', 'StockModelController@update_deleteGet')->middleware('auth');

Route::post('inventory_control/update_delete', 'StockModelController@update_deletePost');
>>>>>>> Stashed changes

// Route::get('Inventory_control', 'stockController@');
// Route::post('Inventory_control', 'stockController@');

// Auth::routes();
