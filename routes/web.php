<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */
// Route::get('/', function () {
//     return view('welcome');


// });

Route::get('/', [crudcontroller::class , 'showdata']);
Route::get('/add_data', [crudcontroller::class , 'add_data']);
Route::post('/storeData', [crudcontroller::class , 'storeData']);
Route::get('/editedata/{id}', [crudcontroller::class , 'editedata']);
// Route::get('/deletedata/{id}', [crudcontroller::class , 'deletedata']);
