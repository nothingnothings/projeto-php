<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get(
    '/dashboard',
    'App\Http\Controllers\UserController@getDashboard'
)->name('dashboard');



Route::post(
    '/signup',
    // [
    // 'uses' => 'UserController@postSignUp', //com isso, definimos que É ESSE CONTROLLER QUE SERÁ USADO, A PARTIR DE QUAISQUER POST REQUESTS A ESSA ROUTE DE '/signup'...
    // 'as' => 'signup' // com isso, definimos 1 alias para essa route, que pode ser usado AO LONGO DE NOSSO APP INTEIRO...

    // ]
//  [Controllers::class, 'signup']
    'App\Http\Controllers\UserController@postSignUp'
);


Route::post(
    '/signin',
    // [
//     'uses' => 'UserController@postSignIn',
//     'as' => 'signin'
// ]
// 'UserController@postSignIn'
    'App\Http\Controllers\UserController@postSignIn'
    // [Controllers::class, 'signin']
);
