<?php

use App\Helpers\Telegram;
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

Route::get( '/', function () {
    /*\Illuminate\Support\Facades\Http::post( 'https://api.telegram.org/bot6211485156:AAF-0tUj_Ca79UkjefRbhkFbFJAccCGzU10/sendMessage', [
        'chat_id' => 1000030645,
        'text'    => '<i>Hello</i>',
        'parse_mode'    => 'html',
    ] );*/
    /*$telegram = resolve(Telegram::class);
    $data = [
        'description' => 'jl;',
        'file' => 'jl;',
        'line' => '',
    ];
    $telegram->sendMessage(1000030645, (string)view('report', $data));

    echo 1;*/
    throw new Exception('gjghjkgjhkhjk');
} );
