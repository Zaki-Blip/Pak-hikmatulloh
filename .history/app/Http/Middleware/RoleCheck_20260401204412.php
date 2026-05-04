<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // CEK AUTHENTIKASI & ROLE
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect('/')->with('error', '❌ Akses Ditolak!');
        }

        return $next($request);
    }
}
