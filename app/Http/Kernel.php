<?php

namespace empleaDos\Http;

use empleaDos\Http\Middleware\IsCvComplete;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \empleaDos\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \empleaDos\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \empleaDos\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \empleaDos\Http\Middleware\RedirectIfAuthenticated::class,
        'company' => \empleaDos\Http\Middleware\CompanyAccount::class,
        'verified' => \empleaDos\Http\Middleware\IsVerified::class,
        'iscompanyfull' => \empleaDos\Http\Middleware\IsCompanyFull::class,
        'companyfull' => \empleaDos\Http\Middleware\CompanyFull::class,
        'iscvcomplete' => \empleaDos\Http\Middleware\IsCvComplete::class,

    ];
}
