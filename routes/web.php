<?php

use App\Http\Controllers\ProductController;
use  Illuminate\Support\Facades\Auth;
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

    $user = Auth::user();   

    return view('homepage', ['user' => $user]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth','Checkadmin'])->group(function (){
    Route::get('/products/create',[ProductController::class ,'create']);
    Route::post('/products' , [ProductController::class , 'store']);
});

Route::resource('products', ProductController::class)->except([
    'create', 'store'
]);


