<?php

namespace App\Http\Middleware;

use App\Model\Doctors;
use Closure;

class CheckAuth
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
        if (empty($request->session()->get('doctor')))
        {
            return redirect('login');
        }
        $status = Doctors::select(['status'])->where(['id'=>$request->session()->get('doctor.id')])->get()->toArray()[0]['status'];
        if ($status == "0")
        {
            echo '<script>window.onload=function(){alert("您的账号已被封禁，请联系管理员激活");window.location.href="/login"}</script>';die;
        }
        return $next($request);
    }
}
