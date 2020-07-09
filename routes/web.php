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

            if (env('APP_ENV') != 'production')
                $page->route_method = 'get';

            if(strpos($page->route_name, '/') !== false) {

                $route_array = explode('/', $page->route_name);

                switch ($page->route_method) {
                    case 'post':
                        Route::post($page->route_name, ['uses' => 'FrontendOutputController@' . $route_array[0], 'as' => $route_array[0]]);
                        break;
                    default:
                        Route::get($page->route_name, ['uses' => 'FrontendOutputController@' . $route_array[0], 'as' => $route_array[0]]);
                        break;
                }

            } else {

                switch ($page->route_method) {
                    case 'post':
                        Route::post($page->urn, ['uses' => 'FrontendOutputController@' . $page->route_name, 'as' => $page->route_name]);
                        break;
                    default:
                        Route::get($page->urn, ['uses' => 'FrontendOutputController@' . $page->route_name, 'as' => $page->route_name]);
                        break;
                }

            }
        }
    }

    // Редиректы
    Route::get('/gallery', function () {
        return redirect(route('portfolio'), 301);
    });

});
