<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * The authentication factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */

    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id == '1')
        {
        header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0',false);
        header('Pragma: no-cache');
        return $next($request);
        }else{

            $mensaje = 'Pagina Restringida a este Usuario';
      
            return redirect('/')->with('mensaje',$mensaje);
        }
    }
}
