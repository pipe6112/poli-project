<?php

namespace App\Http\Middleware;

use Closure;
use Iluminate\Support\Auth;
use App\Models\User;


class ValidarRol
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
        $user = Auth::user();
        $permisos = User::$permisos[$user->rol_id];

        return $next($request);
    }
}
