<?php


use App\Http\Controllers\Page\EtablisementController;
use App\Http\Controllers\Page\MaterialController;

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

Route::view('/', 'welcome')->name('home');


Route::resource('materials',MaterialController::class);
Route::resource('etablisements',EtablisementController::class);
