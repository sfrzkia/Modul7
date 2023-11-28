<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth: :routes():
Route: :get('/', [App\Http\Controlles\HomeContoller: :class, 'index'])->name('index');
Route: :get('/product/{slug}', [App\Http\Controlles\HomeContoller: :class, 'detail'])->name('detail');
Route: :get('lacak', [App\Http\Controlles\HomeContoller: :class, 'lacak'])->name('cekres');

Route: :middleware(['auth','role:user,admin','dontback'])->group(function () {
    Route: :get('/', [App\Http\Controlles\HomeContoller: :class, 'cart'])->name('addtocart');
    Route: :get('car', [App\Http\Controlles\HomeContoller: :class, 'showcart'])->name('cart');
    Route: :get('/cart(id)', [App\Http\Controlles\HomeContoller: :class, 'deletecart'])->name('cartDelete');
    Route: :get('payment', [App\Http\Controlles\HomeContoller: :class, 'payment'])->name('pay');
    Route: :get('invoice/(id)', [App\Http\Controlles\HomeContoller: :class, 'invoice'])->name('inv');
    Route: :get('dashboard', [App\Http\Controlles\HomeContoller: :class, 'index'])->name('dashboard');
});