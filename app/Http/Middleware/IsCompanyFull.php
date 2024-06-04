<?php

namespace empleaDos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsCompanyFull
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
        $id = currentUser()->id;
        $com = currentUser()->company()->where('user_id', $id)->get();
        if ( $com->isEmpty()){
            return redirect()->route('company.create')
                ->with('message','Por favor llena tus Datos de Compañia para continuar');
        }
        return $next($request);
    }
}
