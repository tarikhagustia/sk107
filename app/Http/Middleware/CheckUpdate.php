<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\RequestUpdateAccount;

class CheckUpdate
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
		$check = RequestUpdateAccount::where('id',$request->id)->first();
		if ($check->status == 'approved') {
			return redirect('admin/already-approved');
        }else{
        return $next($request);
		}
    }
}
