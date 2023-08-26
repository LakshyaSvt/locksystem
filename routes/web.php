<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/check',function(){
//     $val = '[{"product_name":"Product 2","qty":2},{"product_name":"Product 3","qty":3}]';
//     dd(json_decode($val));
// });
