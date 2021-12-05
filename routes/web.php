<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfocenterController;
use App\Http\Controllers\InfocenterControllerNull;

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

// Route::get('newstabloid', 'App\Http\Controllers\Tabloidnews@list');

Route::get('/index',[InfocenterController::class, 'getallnews']);
Route::get('/tabloid',[InfocenterController::class, 'tabloidnews']);
Route::get('/entertainment',[InfocenterController::class, 'entertainmentnews']);

Route::get('/sports',[InfocenterControllerNull::class, 'sportsnews']);
Route::get('/government',[InfocenterControllerNull::class, 'governmentnews']);
Route::get('/getlotto',[InfocenterControllerNull::class, 'getlottoContent']);
Route::get('/recommended',[InfocenterControllerNull::class, 'recommendednews']);
Route::get('/promotional',[InfocenterController::class, 'promotionalnews']);
Route::get('/ads',[InfocenterControllerNull::class, 'adsbanner']);
Route::get('/getnews',[InfocenterControllerNull::class, 'getnewsContent']);