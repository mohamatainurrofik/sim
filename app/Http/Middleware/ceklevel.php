<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->name == "Fiqq") {
            return $next($request);
        }
        return redirect('home')->with('error',"Anda Tidak dapat mengakses halaman ini");
    }
}
