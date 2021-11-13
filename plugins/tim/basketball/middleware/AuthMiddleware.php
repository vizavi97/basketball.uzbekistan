<?php
namespace Tim\Basketball\Middleware;


use Closure;
use Backend\Facades\BackendAuth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Event;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        Event::fire('backend.beforeRoute');

        dump(BackendAuth::check());
        if (!BackendAuth::check()) {
            return Response::make('Forbidden', 403);
        }

        return $next($request);
    }

}