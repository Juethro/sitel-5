<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 'receptionist'){
            return redirect()->route('receptionist.index');
        } else if (Auth::user()->role == 'hrd'){
            return redirect()->route('staff.index');
        } else if (Auth::user()->role == 'roomservice'){
            return redirect()->route('room.index');
        }

        return $next($request);
    }
}
