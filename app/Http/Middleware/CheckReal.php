<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\RequestAccount;

class CheckReal
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
		$check = RequestAccount::where('id',$request->id)->first();
		if ($check->status == 'approved') {
			return redirect('admin/already-approved');
        }else{
        return $next($request);
		}
    }
}
