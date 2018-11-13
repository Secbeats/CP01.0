<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Cookie;

class Guest
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
        $area = Cookie::get('area');
        if(isset($area)){
            session(['area' => $area]);
        }
        $sCheck = session('area');

        $urls = [
            url('/choose-country'),
            url('/login'),
            url('/read-notification'),
            url('/login/admin'),
            url('/account/user/verify'),
        ];
        if(!isset($sCheck) &&  !in_array($request->url(), $urls)){
            if(Auth::check() && Auth::user()->role == 'super-admin'){
                return $next($request);
            }else{
                return redirect()
                    ->to('/choose-country');
            }
        }else{
            return $next($request);
        }
    }
}
