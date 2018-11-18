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

/**
 * Entry Point
 */
Route::get('/', function () {
    return view('home');
})->name('home');

/**
 * Сategories
 */
Route::get('/categories/{alias}', function ($alias) {

    foreach (config('dict.crops') as $crop) {
        if ($alias === $crop['translit']) {
            return view('categories', [
                'alias'=>$crop['name']
            ]);
        }
    }

    return view('welcome');
    
})->name('categories');

/**
 * Offer
 */
Route::name('offer.')->prefix('offer')->group(function () {
    
    Route::get('show/{alias}', function ($alias) {
        
        $offers = [
            'prodam-pshenitsa-100-ton-Chmelnytskyi'=>"Продам 100 тонн пшеницы в Хмельницкой области",
        ];

        return view('offer.show', [
            'alias'=>$offers[$alias]
        ]);

    })->name('show');

    Route::get('create', function () {
        return view('offer.create');
    })->name('create');

    Route::get('preview', function () {
        return view('offer.preview');
    })->name('preview');

    Route::get('payment', function () {
        return view('offer.payment');
    })->name('payment');

});

/**
 * Resources
 */
Route::get('/resources/{alias}', function ($alias) {
    
    $resources = [
        'placement-rules'=>"Правила размещения объявлений",
        'incoterms-2010'=>"Инкотермс-2010",
        'classiness-of-grain'=>"Классность зерна",
    ];

    return view('resources.page', [
        'alias'=>$resources[$alias]
    ]);

})->name('resource');

/**
 * Site Map
 */
Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');

/**
 * Contact
 */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/**
 * Ad
 */
Route::get('/ad', function () {
    return view('ad');
})->name('ad');
