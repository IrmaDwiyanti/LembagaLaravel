<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah session memiliki key 'locale' atau 'language'
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        } elseif (session()->has('language')) {
            App::setLocale(session()->get('language'));
        }

        return $next($request);
    }
}
