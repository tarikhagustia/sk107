<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\RequestAccount;

class CheckAccount
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
		$check = RequestAccount::where('user_id',Auth::user->user_id)->first();
		if ($check->status == 'approved') {
			return redirect('admin/no-real-account');
        }else{
        return $next($request);
		}
    }
}
