<?php

namespace App\Http\Middleware;

use Closure;

class CheckStep
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
        $value = $request->session()->get('next_step');
        if ($value == $request->next_step) {
            return redirect('/products/create-step1');
        }
        return $next($request);
    }
}
