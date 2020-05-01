<?php

use Illuminate\Support\Facades\Route;
use App\NavMenuItem;

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



Route::namespace('Frontend')->group(function () {
    foreach (NavMenuItem::all() as $nav_item) {
        Route::get($nav_item->uri, ['uses' => 'FrontendOutputController@' . $nav_item->route, 'as' => $nav_item->route]);
    }
});
