<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\Mt4User;

class CheckDuplicateDemo
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
		$demos = Mt4User::where('login',$request->login)->first();
		if (!empty($demos)) {
			$err = 'Login sudah ada';
			return Back()->withErrors([$err]);
        }else{
        return $next($request);
		}
    }
}
