<?php

namespace empleaDos\Http\Middleware;

use Closure;

class CompanyFull
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
        if (! $com->isEmpty()){
            return redirect()->route('company.index')
                ->with('message','Los Datos de la Compañia ya fueron ingresados!');
        }
        return $next($request);
    }
}
