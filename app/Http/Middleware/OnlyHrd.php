<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class OnlyHrd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 'admin'){
            return redirect()->route('admin');
        } else if (Auth::user()->role == 'receptionist'){
            return redirect()->route('receptionist.index');
        } else if (Auth::user()->role == 'roomservice'){
            return redirect()->route('room.index');
        }

        return $next($request);
    }
}
