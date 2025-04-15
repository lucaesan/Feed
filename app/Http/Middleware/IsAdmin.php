<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e é super_user
        if (Auth::check() && Auth::user()->super_user == 1) {
            return $next($request);
        }

        // retorna 403 se não for admin
        abort(403, 'Acesso negado. Contate o administrador do sistema.');
    }
}
