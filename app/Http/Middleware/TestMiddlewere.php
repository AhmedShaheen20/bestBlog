<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class TestMiddlewere
{

     /* Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed*/

    public function handle($request, Closure $next)
    {
        //law el user number 2 login redirect to login
        $user= Auth::loginUsingId(1);
        if ($user->group_id !=1) {
            return redirect('login');
        }
        return $next($request);
    }
}
