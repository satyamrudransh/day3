<?php

use Illuminate\Support\Facades\Route;
use helloJarvish\Helloprint;
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

Route::get('hello', function () {
$hello = new Helloprint();
dd($hello->user());

// dd($hello);
});

$router->get('/hi','Helloprint@index');
