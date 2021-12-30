<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(!session()->has('usuario')):
            return redirect()->route('documentos.index')->with('mensagem', 'Acesso negado.. por favor insira login/senha');
        endif;

        return $next($request);
    }
}
