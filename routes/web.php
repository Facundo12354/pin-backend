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
//     Mail::to('facuruiz11@hotmail.com')
//     ->cc('facundo9831@gmail.com')
//    ->send(new EnviarMail())
//    ->from('ahmygoddess@outlook.es','Brisa Soledad');
//     return view('welcome');
    // Mail::send('email.template', $data, function($message) {
    //      $message->to('facuruiz11@hotmail.com')
    //              ->subject('welcome')
    //             ->from('ahmygoddess@outlook.es', 'Brisa Soledad');

    Mail::send('email.template', $data, function($message) {
            $message->to('facuruiz11@hotmail.com')
                ->subject('consulta')
                ->from('facundo9831@gmail.com', 'facundo');
    });
   });
//});
Route::resource('contactos','App\Http\Controllers\ContactoController')->names('contactos');

// Route::post('guardar',[ContactoController::class,'guardar']);

