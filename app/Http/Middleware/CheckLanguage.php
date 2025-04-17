<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckLanguage
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Exclude specific paths from language handling
        if ($request->method() == 'GET' && in_array($request->path(), ['auth/callback', 'client/redirect'])) {
            return $next($request);
        }

        $supportedLocales = config('app.locales', ['ar', 'en']);
        $defaultLocale = 'ar';

        // 1. Check if 'lang' exists in the request
        if ($request->has('lang')) {
            $lang = $request->input('lang');
            if (in_array($lang, $supportedLocales)) {
                app()->setLocale($lang);
                Session::put('lang', $lang);
                return $next($request)->cookie('lang', $lang, 60 * 24 * 30); // Store language in cookie for 30 days
            }
        }

        // 2. Check language from session
        if (Session::has('lang')) {
            $lang = Session::get('lang');
            if (in_array($lang, $supportedLocales)) {
                app()->setLocale($lang);
                return $next($request);
            }
        }

        // 3. Check language from cookies
        $lang = Cookie::get('lang', $defaultLocale);
        if (!in_array($lang, $supportedLocales)) {
            $lang = $defaultLocale;
        }

        // Set application language
        app()->setLocale($lang);
        Session::put('lang', $lang);

        return $next($request)->cookie('lang', $lang, 60 * 24 * 30);
    }
}
