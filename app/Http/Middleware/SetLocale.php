<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
       if (session()->has('locale')) {
            // Force set the locale from session
            $locale = session('locale');
            App::setLocale($locale);
            // For added certainty
            app()->setLocale($locale);
        }
        return $next($request);
    }
}