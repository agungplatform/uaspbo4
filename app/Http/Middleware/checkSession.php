<?php
namespace App\Http\Middleware;
use Closure;
class checkSession
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->get('userid')){
            return redirect('/login');
        }
        return $next($request);
    }
}
