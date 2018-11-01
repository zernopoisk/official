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
    // Crops.
    Route::get('crops/categories','SizeDetectController@cropsCategories');
    Route::get('crops','SizeDetectController@crops');
    // Incoterms.
    Route::get('incoterms/groups','SizeDetectController@incotermsGroups');
    Route::get('incoterms','SizeDetectController@incoterms');
    
});