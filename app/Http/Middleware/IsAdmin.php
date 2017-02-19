<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if(Auth::user()->email == 'test@test.com') {
            return $next($request);
        }

        return redirect()
            ->route('article.index')
                ->with('success', "Vous n'êtes pas administrateur, il faut le compte administrateur avec l'adresse admin@gmail.com");
    }
}
