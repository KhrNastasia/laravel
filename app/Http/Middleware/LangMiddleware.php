<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            if(isset($_COOKIE['lang'])){
                $lang = $_COOKIE['lang'];
            }else{
                if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
                    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
                } else{
                    $lang = 'ru';
                }
            }
        }

        setcookie('lang', $lang, time() + 3600);

        App::setlocale($lang);

        if (isset($_GET['lang'])) {
            return redirect()->back();
        }else{
            return $next($request);
        }
    }
}
