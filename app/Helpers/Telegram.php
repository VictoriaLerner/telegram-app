<?php
namespace  App\Helpers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Telegram {
    protected $http;
    protected $bot;
    const url = 'https://api.tlgr.org/bot';

    public function __construct(Http $http, $bot = null)
    {
        $this->http = $http;
        $this->bot = $bot;
    }


    public function  sendMessage($chat_id , $message){
        \Illuminate\Support\Facades\Http::post( 'https://api.telegram.org/bot6211485156:AAF-0tUj_Ca79UkjefRbhkFbFJAccCGzU10/sendMessage', [
            'chat_id' => $chat_id,
            'text'    =>  $message,
            'parse_mode'    => 'html',
        ] );
    }

}
