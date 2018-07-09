<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    public function handle($request, Closure $next)
    {
        if (!session('admin')){
            $return_url = url()->current();
            return redirect(url('admin/login?return_url='.$return_url));
        }

        return $next($request);
    }
}
