<?php

use Illuminate\Support\Facades\Route;
use Matriphe\Larinfo\LarinfoFacade as Larinfo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', static function () {
    return view('welcome');
});

Route::prefix('info')->group(function () {
    Route::get('php', static function () {
        phpinfo();
    });

    Route::get('server', static function () {
        return Larinfo::getInfo();
    });
});
