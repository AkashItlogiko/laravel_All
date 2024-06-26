<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CounteryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Curriculum role rules
        $array = [
            'Bangladesh',
            'America',
            'Canada',
            'Africa',
        ];
        if(in_array($request->countery,$array)){
               return $next($request);
        }
     return redirect()->to('/');

    }
}