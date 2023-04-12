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
    ->bcc('jeff@amazon.com')
    ->send(new EnviarMail());
    $message = Swift_Message::newInstance()
    ->setSubject('Prueba')
    ->setFrom('facuruiz11@hotmail.com', 'Facundo')
    ->setTo('ahmygoddess@outlook.es')
    ->setBody('hola esto es una prueba');
    return view('welcome');
 });
Route::resource('contactos','App\Http\Controllers\ContactoController')->names('contactos');

// Route::post('guardar',[ContactoController::class,'guardar']);

