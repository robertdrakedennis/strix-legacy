<?php

namespace App\Http\Middleware;

use Closure;

class SetThemeFromSession
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
        // TODO: Add session checking when theme switcher is added
        \Theme::set('Strix');

        return $next($request);
    }
}
