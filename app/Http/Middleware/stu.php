<?php

namespace App\Http\Middleware;

use Closure;

class stu
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
        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $res = $redis->get('user');
        // echo $res;
        if($res == false){
            echo "<script>alert('请去登录');window.history.back(-1);</script>";die;
        } 
    return $response=$next($request);
        
        // return $response;
    }
}
