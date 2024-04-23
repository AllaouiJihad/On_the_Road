<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if ($request->user()->role_id == 1) {
            return $next($request);
        }
        abort(403, 'Accès interdit. Vous n\'avez pas les autorisations nécessaires pour accéder à cette ressource.');
    }
}
