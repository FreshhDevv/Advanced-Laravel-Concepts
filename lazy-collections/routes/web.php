<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\LazyCollection;

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

Route::get('lazy', function() {
    $collection = Collection::times(1000000)
    ->map(function($number) {
    return pow(2, $number)        ;
    })->all();

    return 'done!';
});

Route::get('lazy', function() {
    $collection = LazyCollection::times(1000000)->map(function($number) {
        return pow(2, $number);
    })
    ->all();

    return 'done!';
});
