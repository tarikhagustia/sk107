<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\Mt4User;

class CheckDemo
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
<<<<<<< HEAD
		$demos = Mt4User::where('user_id',Auth::user()->id)->where('is_real','no')->where('is_active','yes')->get();
=======
		$demos = Mt4User::where('user_id',Auth::user()->id)->get();
>>>>>>> ebe53c6e9c26021da2bbd66aae2444e0190afc04
		if (empty($demos[0])) {
			$err = 'Anda harus membuat demo account terlebih dahulu sebelum membuat real account';
            return redirect('admin/account/demo-account')->withErrors([$err]);
        }

        return $next($request);
    }
}
