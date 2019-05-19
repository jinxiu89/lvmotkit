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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'PagesController@root')->name('root');
Route::prefix('admin')->group(function () {
    Route::get('/hello/{name}', 'admin\IndexController@index')->where(['name' => '[a-zA-Z]+',]);
});
Auth::routes(['verify' => true]);
// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware'=>['auth','verified']],function(){
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
});

