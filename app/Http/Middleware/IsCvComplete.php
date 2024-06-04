<?php

namespace empleaDos\Http\Middleware;

use Closure;

class IsCvComplete
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
        $com = currentUser()->perdatas()->where('user_id', $id)->get();
        if($com->isEmpty()){
            return redirect()->route('curriculum.create')
                ->with('becareful','Favor de completar los datos solicitados en: (*), gracias. ');
            
                        
        }
        return $next($request);
    }
}
