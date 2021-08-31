<?php

namespace App\Http\Middleware\collaborator;

use Closure;

class ValidationRol
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
        $collaborator = $request->route('collaborator');
        
        if (auth()->user()->roles[0]->name == 'Supervisor') {
            if (auth()->user()->name != $collaborator->supervisor) {
                return redirect()->route('collaborators.index');
            }
        }
        return $next($request);
    }
}
