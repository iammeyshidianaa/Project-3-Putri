<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }

        if (Auth::user()->level == 'admin') {
            return Redirect::to('admin.index');
        }elseif (Auth::user()->level == 'guru') {
            return  Redirect::to('guru.index');
        }elseif (Auth::user()->level == 'siswa') {
            return  Redirect::to('siswa.index');
        }
    }
}
