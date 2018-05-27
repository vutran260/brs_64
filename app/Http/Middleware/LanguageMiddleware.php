<?php

namespace App\Http\Middleware;

use Closure;

class LanguageMiddleware
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
        $rawLocale = session()->get('locale');

        if (in_array($rawLocale, config('app.locales'))) {
            $locale = $rawLocale;
        } else {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
