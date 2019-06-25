<?php

namespace App\Http\Middleware;

use Closure;

class wares
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
        $tt = date('Y-m-d ',time());
        $sTime = strtotime($tt."08:00".":00");    //strtotime解析成unix时间格式
        $eTime = strtotime($tt."12:00".":00");
        dump($sTime);

        if(!(time()>$sTime && time()<$eTime)){
            echo "<script>alert('已经超过修改时间');window.history.back(-1);</script>";die; 
        }
        // $t = (int)date('H',time());
        // if(!($t > 7 && $t < 10)){
        //         echo "<script>alert('已经超过修改时间');window.history.back(-1);</script>";die; 
        // }
        return $next($request);
    }
}
