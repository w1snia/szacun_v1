<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $class = get_class($exception);

        switch($class) {
            case 'Illuminate\Auth\AuthenticationException':
                $guard = array_get($exception->guards(), 0);
                switch ($guard) {
                    case 'admin':
                        $login = 'admin.login';
                        break;
                    case 'supervisor':
                        $login = 'supervisor.login';
                        break;
                    default:
                        $login = 'login';

                        break;
                }

                return redirect()->route($login);
        }

        return parent::render($request, $exception);
    }

//    /**
//     * Convert an authentication exception into a response.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Illuminate\Auth\AuthenticationException  $exception
//     * @return \Illuminate\Http\Response
//     */
//    protected function unauthenticated($request, AuthenticationException $exception)
//    {
//        if ($request->expectsJson()) {
//            return response()->json(['error' => 'Unauthenticated.'], 401);
//        }
//
//        $guard = array_get($exception->guards(), 0);
//
//        if ($guard === 'admin') {
//            return redirect()->guest(route('admin.login'));
//        }
//
//        return redirect()->guest(route('login'));
//    }﻿

}
