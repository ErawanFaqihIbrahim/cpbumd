<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(auth()->user()){
            if(auth()->user()->role == $role){
                return $next($request);
            }
            elseif($role == 'admin'){
                abort(403, 'Not Authorized as an admin.');
            }
            elseif($role == 'applicant'){
                abort(403, 'Not Authorized as an applicant.');
            }
        }

        return redirect('/'); // Menampilkan pesan error default jika pengguna tidak diautentikasi atau tidak ada peran yang sesuai.
    }
}
