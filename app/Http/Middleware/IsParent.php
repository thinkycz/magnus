<?php

namespace App\Http\Middleware;

use Closure;

class IsParent
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
        if (!auth()->user()->children()->exists()) {
            return redirect()->route('not_student');
        }

        return $next($request);
    }
}
