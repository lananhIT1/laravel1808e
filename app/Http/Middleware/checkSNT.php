<?php

namespace App\Http\Middleware;

use Closure;

class CheckSNT
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
        //lấy tham số ng dùng gửi lên
        $a=$request->number;
        if($a<2){
            return redirect()->route('notSNT');
        }else{
            for($i=2;$i<sqrt($a);$i++){
                if($a % $i==0){
                    return redirect()->route('notSNT');
                }
            }
            return $next($request);
        }   
    }
}