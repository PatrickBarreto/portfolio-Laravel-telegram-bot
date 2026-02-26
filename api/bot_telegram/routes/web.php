<?php

use App\Events\PlaygroundEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bot;
use App\Http\Controllers\testeStellar;
use Illuminate\Http\Response;

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

Route::get('/telegram/send/{msg}', function ($msg) {
    $bot = new Bot();
    $bot->sendMessageToGroup($msg);
    return new Response(['sucess'=>true]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/playground', function (){
    event(new PlaygroundEvent());
});

Route::get('/ws', function (){
    return view('websockets');
});

Route::get('/teste', function() {
    $response = (new testeStellar)->createAccount();
    
    return $response;
});
