<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            return route('auth.login'); // 👈 arahkan ke route login milik kamu
        }

        return null;
    }
}
