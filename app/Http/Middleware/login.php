<?php

namespace App\Http\Middleware;

use Closure;

class login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        
        if(empty(session('login'))){
            // echo "<script>alert('请您先去登录');window.history.back(-1);</script>";die;
            echo ("<script>alert('您还没登录，请先去登录');location='login'</script>");
        } 
        return $next($request);
    }
}
