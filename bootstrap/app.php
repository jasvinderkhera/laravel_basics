<?php

use App\Http\Middleware\AgeCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\SetLang;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(AgeCheck::class);

        // $middleware->appendToGroup('check1',[
        //     AgeCheck::class,
        //     CountryCheck::class,
        // ]);

        $middleware->appendToGroup('SetLang', SetLang::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
