<?php

use App\Http\Controllers\IndexController;
use App\Models\User;
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
// Route::get('/index',[IndexController::class, 'index'])->name('index');
// Route::view('/about','about')->name('about');
// Route::view('/products','products')->name('products');

Route::get('/product', [IndexController::class, 'product'])->name('product');
Route::post('/purchase-lead', [IndexController::class, 'purchaseLeadEnquiry'])->name('purchase-lead-enquiry');

Route::get('/service',[IndexController::class, 'service'])->name('service');
Route::post('/service-lead', [IndexController::class, 'serviceLeadEnquiry'])->name('service-lead-enquiry');



Route::group(['prefix' => '/'], function () {
    Voyager::routes();
});

Route::get('/test',function (){
    $user = User::find(7);
    return $user->cities;
});
