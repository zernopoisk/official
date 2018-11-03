<?php

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

// Detect max size from dictionaries config files.
Route::prefix('sizedetect')->group(function () {
    // Offers.
    Route::get('offers/statuses', 'SizeDetectController@offersStatuses');
    // Seller.
    Route::get('seller/types', 'SizeDetectController@sellerTypes');
    // Pickup.
    Route::get('pickup', 'SizeDetectController@pickup');
    // Payment.
    Route::get('payment/forms', 'SizeDetectController@paymentForms');
    Route::get('payment/methods', 'SizeDetectController@paymentMethods');
    // Crops.
    Route::get('crops/categories','SizeDetectController@cropsCategories');
    Route::get('crops/classiness','SizeDetectController@cropsClassiness');
    Route::get('crops','SizeDetectController@crops');
    // Incoterms.
    Route::get('incoterms/groups','SizeDetectController@incotermsGroups');
    Route::get('incoterms','SizeDetectController@incoterms');
    
});