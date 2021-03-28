<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AjaxLoadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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


//Auth::routes();

Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('admin/login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::group([
    'middleware' => 'auth'
], function ($router) {
    $router->get('/home', [HomeController::class, 'index'])->name('home');
    $router->get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    /*ajax loading*/
    Route::group(['prefix' => 'load'], function($router) {
        $router->post('/district', [AjaxLoadController::class, 'getDistrict'])->name('get.district');
        $router->post('/upazila', [AjaxLoadController::class, 'getUpazila'])->name('get.upazila');
    });


});


