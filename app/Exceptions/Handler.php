<?php
namespace App\Exceptions;

use App\Helpers\Telegram;
use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 *
 */
class Handler extends ExceptionHandler {




    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */


    public function report(Throwable $e)
    {


        /** @var Telegram $telegram */
        $telegram = app(Telegram::class);

        $data = [
            'description' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
        ];
   

        $telegram->sendMessage(env('REPORT_TELEGRAM_ID'), (string)view('report', $data));

        //$telegram->sendMessage(1000030645,$data, (string)view('report', $data));
      /*  \Illuminate\Support\Facades\Http::post( 'https://api.telegram.org/bot6211485156:AAF-0tUj_Ca79UkjefRbhkFbFJAccCGzU10/sendMessage', [
                'chat_id'    => 1000030645,
                'text'       => (string)view('report', $data),
                'parse_mode' => 'html',
            ] );*/

//        //1000030645
//        $telegram = new Telegram();
//        $telegram->sendMessage('1000030645'   , (string)view('report' , $data));


    }


    public function register(): void {


        $this->reportable( function ( Throwable $e  ) {



        } );
    }
}
