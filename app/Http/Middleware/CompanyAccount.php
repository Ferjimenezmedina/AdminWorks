<?php

namespace empleaDos\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CompanyAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (currentUser()->type != 'company'){
            return $next($request);
        }
        return redirect()->route('company.index');
    }
}
