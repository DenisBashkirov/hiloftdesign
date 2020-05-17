<?php

use Illuminate\Support\Facades\Route;
use App\Page;
use Illuminate\Support\Facades\Schema;

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

    // Перебор из базы данных
    if(Schema::hasTable('pages')) {
        foreach (Page::all() as $page) {

            if(strpos($page->route, '/') !== false) {
                $route_array = explode('/', $page->route);
                Route::get($page->route, ['uses' => 'FrontendOutputController@' . $route_array[0], 'as' => $route_array[0]]);
            } else {
                Route::get($page->urn, ['uses' => 'FrontendOutputController@' . $page->route, 'as' => $page->route]);
            }
        }
    }

    Route::post('/thanks', ['uses' => 'FrontendOutputController@thanks', 'as' => 'thanks']);

});
