<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    protected function tokensMatch($request)
    {
        // Don't validate CSRF when testing.
        if (env('APP_ENV') === 'testing') {
            return true;
        }

        return parent::tokensMatch($request);
    }
}
