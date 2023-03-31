<?php

namespace App\Http\Middleware;

use Closure;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->level, $levels)) {
            return $next($request);
        } elseif (auth()->user()) {
            if (auth()->user()->level == 'admin') {
                return redirect('/admin');
            } elseif (auth()->user()->level == 'petugas') {
                return redirect('/petugas');
            } elseif (auth()->user()->level == 'user') {
                return redirect('/');
            }
        } else {
            return redirect('/login');
        }

        // if (in_array($request->user()->level, $levels)){
        //     return $next($request);
        // }else {
        //     if(auth()->user()->level == 'admin'){
        //         return redirect('/admin');
        //     } else if (auth()->user()->level == 'petugas'){
        //         return redirect('/petugas');
        //     } else if(auth()->user()->level == 'user') {
        //         return redirect('/pengaduan/create');
        //     }
        // }
    }
}