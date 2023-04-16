<?php

use Illuminate\Support\Facades\Route;
use App\Mail\EnviarMail;
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
    Mail::to('facuruiz11@hotmail.com')
    ->cc('facundo9831@gmail.com')
    
    ->send(new EnviarMail('nombre'));
    return view('welcome');
 });
Route::resource('contactos','App\Http\Controllers\ContactoController')->names('contactos');


