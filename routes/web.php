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

Route::get( '/', function (  App\Helpers\Telegram $telegram) {

$buttons = [
    'inline_keyboard'=> [
        [

           [
              'text'  =>'button4',
              'callback_data'  =>'1',
           ],
            [
                'text'  =>'button9',
                'callback_data'  =>'2',
            ],

        ],

        [


            [
                'text'  =>'button3',
                'callback_data'  =>'3',
            ],

        ],

    ]
];

//    $sendMessage=  $telegram->editButtons('1000030645' , 'test7' , json_encode($buttons) , 87);



//dd( json_decode(  $sendMessage));

//    $sendMessage=  $telegram->sendMessage('1000030645' , 'test');
//    $sendMessage= json_decode($sendMessage);
//    $http=  $telegram->sendDocument('1000030645' , '1.jpg' , $sendMessage->result->message_id);

} );
